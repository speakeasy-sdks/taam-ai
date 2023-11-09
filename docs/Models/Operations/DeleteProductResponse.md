# DeleteProductResponse


## Fields

| Field                                                                                                                 | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `contentType`                                                                                                         | *string*                                                                                                              | :heavy_check_mark:                                                                                                    | HTTP response content type for this operation                                                                         |
| `deleteProduct`                                                                                                       | [?\taamai\taamai\Models\Operations\DeleteProductDeleteProduct](../../Models/Operations/DeleteProductDeleteProduct.md) | :heavy_minus_sign:                                                                                                    | OK                                                                                                                    |
| `headers`                                                                                                             | array<string, array<*string*>>                                                                                        | :heavy_minus_sign:                                                                                                    | N/A                                                                                                                   |
| `statusCode`                                                                                                          | *int*                                                                                                                 | :heavy_check_mark:                                                                                                    | HTTP response status code for this operation                                                                          |
| `rawResponse`                                                                                                         | [\Psr\Http\Message\ResponseInterface](https://www.php-fig.org/psr/psr-7/#33-psrhttpmessageresponseinterface)          | :heavy_minus_sign:                                                                                                    | Raw HTTP response; suitable for custom response parsing                                                               |