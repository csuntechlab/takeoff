<?php
declare (strict_types = 1);

namespace App\Exceptions\BuildResponse;

class BuildResponse
{
    /**
     * Generate basic API response array
     *
     * @param string $collection - e.g. classes, membership-classes, etc.
     * @param boolean $success - default true
     * @param int $status_code - default 200
     * @return array
     * @internal param string $data_type - e.g. classes, membership-classes, etc.
     */
    private static function build_response_array(
        string $collection,
        bool $success = true,
        int $status_code = 200
    ): array {
        return [
            'collection' => $collection,
            'success' => ($success ? true : false),
            'api' => 'Checkpoint',
            'version' => '1.0',
            'code' => $status_code,
        ];
    }

    /**
     * Constructs the response object
     *
     * @param $message
     * @param $status
     * @return
     */
    public static function build_response(
        string $message,
        int $status_code
    ) {
        $collection = 'errors';
        $success = false;
        $response = self::build_response_array($collection, $success, $status_code);
        $response['message'] = $message;

        return response($response, $status_code);
    }
}
