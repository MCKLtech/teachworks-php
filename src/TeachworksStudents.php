<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksStudents extends TeachworksResource
{

    /**
     * Lists Students
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#cb509d22-7290-4eb6-b407-63366b2bfa5c
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('students', $options);
    }

    /**
     * Gets a single Student based on their ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#6caebee2-1df6-4dca-af55-d6f777fcf424
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get(string $id)
    {
        $path = $this->studentPath($id);

        return $this->client->get($path);
    }

    /**
     * Creates a Child Student. Independent Students are added using the Customers endpoint.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#01cd10b3-08ac-4b21-b6f0-a37bef2c6b32
     * @param array $options
     * @return stdClass
     */
    public function create(array $options)
    {
        return $this->client->post('students', $options);
    }

    /**
     * Updates a Student
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#0b010fec-f4b4-4a23-80f2-d9ff6c06ca6a
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->studentPath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes a Student.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#d43b601e-614e-48d4-9cf4-3764aca3a1b1
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->studentPath($id);

        return $this->client->delete($path);
    }

    /**
     * Updates custom fields
     *
     * @see https://documenter.getpostman.com/view/10096149/SWTABydD#20359fe0-17d0-4ca8-8e17-e31680f91792
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function customFields(string $id, array $options) {

        $path = $this->studentPath($id);

        return $this->client->put($path."/custom_fields", $options);
    }

    /**
     * @param string $id
     * @return string
     */
    public function studentPath(string $id)
    {
        return 'students/' . $id;
    }
}
