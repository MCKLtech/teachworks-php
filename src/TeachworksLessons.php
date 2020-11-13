<?php

namespace Teachworks;

use Http\Client\Exception;
use stdClass;

class TeachworksLessons extends TeachworksResource
{

    /**
     * Lists Lessons
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#15f6a642-1e6f-47f8-aa6e-b43a8e2e8636
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function list(array $options = [])
    {
        return $this->client->get('lessons', $options);
    }

    /**
     * Gets a single Lesson by ID
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#6dc0b822-d294-4145-be58-39cc6d42f3f3
     * @param  string $id
     * @return stdClass
     * @throws Exception
     */
    public function get($id)
    {
        $path = $this->lessonPath($id);

        return $this->client->get($path);
    }

    /**
     * Creates a Lesson
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#8376d9ed-855f-48b7-9086-1e6cbddd3b48
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function create(array $options)
    {
        return $this->client->post('lessons', $options);
    }

    /**
     * Complete a Lesson
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#1122f430-271d-4941-95b3-4fe88b70bb80
     * @param  array $options
     * @return stdClass
     * @throws Exception
     */
    public function complete(string $id, array $options)
    {
        $path = $this->lessonPath($id);

        return $this->client->put($path."/complete", $options);
    }

    /**
     * Updates a Lesson.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#8b58bff8-524a-4751-b28e-7faa12ab99fc
     * @param string $id
     * @param array $options
     * @return stdClass
     */
    public function update($id, array $options)
    {
        $path = $this->lessonPath($id);

        return $this->client->put($path, $options);
    }

    /**
     * Deletes a Lesson.
     *
     * @see    https://documenter.getpostman.com/view/10096149/SWTABydD#8b58bff8-524a-4751-b28e-7faa12ab99fc
     * @param string $id
     * @return stdClass
     */
    public function delete($id)
    {
        $path = $this->lessonPath($id);

        return $this->client->delete($path);
    }

    /**
     * @param string $id
     * @return string
     */
    public function lessonPath(string $id)
    {
        return 'lessons/' . $id;
    }
}
