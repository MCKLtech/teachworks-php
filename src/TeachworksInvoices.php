<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksInvoices extends TeachworksResource
{

    /**
     * Lists Invoices
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#5ecadc7b-4c2e-4600-a03a-a04b469428f1
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('invoices', $options);
    }

    /**
     * Gets a single Invoice by ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#cf9d8052-59b7-4b13-906a-932e892ae175
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get($id)
    {
        $path = $this->invoicePath($id);

        return $this->client->get($path);
    }

    /**
     * Creates an Invoice
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#2c8a38b9-0dd1-4f77-9951-de3fd68dfe65
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function create(array $options)
    {
        return $this->client->post('invoices', $options);
    }

    /**
     * Updates an Invoice.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#2c8a38b9-0dd1-4f77-9951-de3fd68dfe65
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->invoicePath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes an Invoice.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#2c8a38b9-0dd1-4f77-9951-de3fd68dfe65
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->invoicePath($id);

        return $this->client->delete($path);
    }

    /**
     * @param string $id
     * @return string
     */
    public function invoicePath(string $id)
    {
        return 'invoices/' . $id;
    }
}
