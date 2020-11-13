<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksPayments extends TeachworksResource
{

    /**
     * Lists Payments
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#d667e339-9352-4826-9b27-2263296968bc
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('payments', $options);
    }

    /**
     * Gets a single Payment by ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#f8f1a281-a274-42dd-8e59-5c89c8b3d316
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get($id)
    {
        $path = $this->paymentPath($id);

        return $this->client->get($path);
    }

    /**
     * Creates a Payment
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#0d36520f-93c1-4e2e-9ecb-c5870e0377e1
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function create(array $options)
    {
        return $this->client->post('payments', $options);
    }

    /**
     * Updates a Payment.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#0d36520f-93c1-4e2e-9ecb-c5870e0377e1
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->paymentPath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes a Payment.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#0d36520f-93c1-4e2e-9ecb-c5870e0377e1
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->paymentPath($id);

        return $this->client->delete($path);
    }

    /**
     * @param string $id
     * @return string
     */
    public function paymentPath(string $id)
    {
        return 'payments/' . $id;
    }
}
