<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksCustomers extends TeachworksResource
{

    /**
     * Lists Customers
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#6b4944e1-3428-4c73-885e-55eea1dae479
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('customers', $options);
    }

    /**
     * Gets a single Customer based on their ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#cf4c823b-8fb9-495f-9798-2ac86b1c1dbf
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get(string $id)
    {
        $path = $this->customerPath($id);

        return $this->client->get($path);
    }

    /**
     * Creates a Family or Independent Student. Defaults to Family.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#23020786-388b-496a-80d6-9465788b9f0e
     * @param array $options
     * @param string $type
     * @return stdClass
     */
    public function create(array $options, string $type = 'family')
    {
        $path = $this->customerPath($type);

        return $this->client->post($path, $options);
    }

    /**
     * Updates an Family or Independent Student.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#0b010fec-f4b4-4a23-80f2-d9ff6c06ca6a
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->customerPath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes an Family.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#d43b601e-614e-48d4-9cf4-3764aca3a1b1
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->customerPath($id);

        return $this->client->delete($path);
    }

    /**
     * Updates custom fields
     *
     * @see https://documenter.getpostman.com/view/10096149/SWTABydD#4e95e3ac-79a9-4d4a-99fb-c6d5af69d93b
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function customFields(string $id, array $options) {

        $path = $this->customerPath($id);

        return $this->client->put($path."/custom_fields", $options);
    }

    /**
     * @param string $id
     * @return string
     */
    public function customerPath(string $id)
    {
        return 'customers/' . $id;
    }
}
