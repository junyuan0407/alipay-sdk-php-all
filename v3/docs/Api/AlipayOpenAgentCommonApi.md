# Alipay\OpenAPISDK\AlipayOpenAgentCommonApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**sign()**](AlipayOpenAgentCommonApi.md#sign) | **POST** /v3/alipay/open/agent/common/sign | 代签约产品通用接口


## `sign()`

```php
sign($appDemo, $businessLicenseAuthPic, $businessLicensePic, $data, $shopScenePic, $shopSignBoardPic, $specialLicensePic, $webHomeScreenshot, $webItemScreenshot, $webPayScreenshot, $webSitesLoa): object
```

代签约产品通用接口

三方应用代理签约产品，需要配合开启事务接口使用

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenAgentCommonApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

// 初始化alipay参数
$alipayConfig = new \Alipay\OpenAPISDK\Util\Model\AlipayConfig();
$alipayConfig->setAppId('app_id');
$alipayConfig->setPrivateKey('private_key');
// 密钥模式
$alipayConfig->setAlipayPublicKey('alipay_public_key');
// 证书模式
// $alipayConfig->setAppCertPath('../appCertPublicKey.crt');
// $alipayConfig->setAlipayPublicCertPath('../alipayCertPublicKey_RSA2.crt');
// $alipayConfig->setRootCertPath('../alipayRootCert.crt');
$alipayConfig->setEncryptKey('encrypt_key');
$alipayConfigUtil = new \Alipay\OpenAPISDK\Util\AlipayConfigUtil($alipayConfig);
$apiInstance->setAlipayConfigUtil($alipayConfigUtil);

$appDemo = "/path/to/file.txt"; // \SplFileObject
$businessLicenseAuthPic = "/path/to/file.txt"; // \SplFileObject
$businessLicensePic = "/path/to/file.txt"; // \SplFileObject
$data = new \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel(); // \Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel
$shopScenePic = "/path/to/file.txt"; // \SplFileObject
$shopSignBoardPic = "/path/to/file.txt"; // \SplFileObject
$specialLicensePic = "/path/to/file.txt"; // \SplFileObject
$webHomeScreenshot = "/path/to/file.txt"; // \SplFileObject
$webItemScreenshot = "/path/to/file.txt"; // \SplFileObject
$webPayScreenshot = "/path/to/file.txt"; // \SplFileObject
$webSitesLoa = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->sign($appDemo, $businessLicenseAuthPic, $businessLicensePic, $data, $shopScenePic, $shopSignBoardPic, $specialLicensePic, $webHomeScreenshot, $webItemScreenshot, $webPayScreenshot, $webSitesLoa);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenAgentCommonApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appDemo** | **\SplFileObject****\SplFileObject**|  | [optional]
 **businessLicenseAuthPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **businessLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **data** | **\Alipay\OpenAPISDK\Model\AlipayOpenAgentCommonSignModel**|  | [optional]
 **shopScenePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **shopSignBoardPic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **specialLicensePic** | **\SplFileObject****\SplFileObject**|  | [optional]
 **webHomeScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **webItemScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **webPayScreenshot** | **\SplFileObject****\SplFileObject**|  | [optional]
 **webSitesLoa** | **\SplFileObject****\SplFileObject**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
