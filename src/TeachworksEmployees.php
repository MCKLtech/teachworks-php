<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksEmployees extends TeachworksResource
{

    /**
     * Lists Employees
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#831a7fd2-dfaf-438f-8dca-baa9240ca50e
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('employees', $options);
    }

    /**
     * Gets a single Employee based on their ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#302ff8d1-ce8a-4f4b-9dca-a5169f79c4ac
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get($id)
    {
        $path = $this->employeePath($id);

        return $this->client->get($path);
    }

    /**
     * Creates a User
     *
     * @see    https://developers.thinkific.com/api/api-documentation/
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function create(array $options)
    {
        return $this->client->post('employees', $options);
    }

    /**
     * Updates an Employee.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#d43b601e-614e-48d4-9cf4-3764aca3a1b1
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->employeePath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes an Employee.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#d43b601e-614e-48d4-9cf4-3764aca3a1b1
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->employeePath($id);

        return $this->client->delete($path);
    }

    /**
     * @param string $id
     * @return string
     */
    public function employeePath(string $id)
    {
        return 'employees/' . $id;
    }
}
