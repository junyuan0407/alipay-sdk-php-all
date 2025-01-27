# Alipay\OpenAPISDK\AlipayOpenMiniVersionListApi

All URIs are relative to https://openapi.alipay.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**query()**](AlipayOpenMiniVersionListApi.md#query) | **GET** /v3/alipay/open/mini/version/list/query | 小程序版本列表查询


## `query()`

```php
query($bundleId, $versionStatus): \Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionListQueryResponseModel
```

小程序版本列表查询

根据状态、端分页查询小程序版本基础信息列表，查询结果根据版本号大小降序排列，即0.0.2在前，0.0.1在后。

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Alipay\OpenAPISDK\Api\AlipayOpenMiniVersionListApi(
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

$bundleId = com.alipay.alipaywallet; // string | 端参数，用于查询多端版本，不传默认为支付宝端。 高德端：com.amap.app
$versionStatus = AUDITING; // string | 版本状态列表，用英文逗号\",\"分割，可选；不填默认不返回，状态可选值以及说明如下-INIT: 开发中, AUDITING: 审核中, AUDIT_REJECT: 审核驳回, WAIT_RELEASE: 待上架, BASE_AUDIT_PASS: 准入不可营销, GRAY: 灰度中, RELEASE: 已上架, OFFLINE: 已下架, AUDIT_OFFLINE: 已下架;

try {
    $result = $apiInstance->query($bundleId, $versionStatus);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlipayOpenMiniVersionListApi->query: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bundleId** | **string**| 端参数，用于查询多端版本，不传默认为支付宝端。 高德端：com.amap.app | [optional]
 **versionStatus** | **string**| 版本状态列表，用英文逗号\&quot;,\&quot;分割，可选；不填默认不返回，状态可选值以及说明如下-INIT: 开发中, AUDITING: 审核中, AUDIT_REJECT: 审核驳回, WAIT_RELEASE: 待上架, BASE_AUDIT_PASS: 准入不可营销, GRAY: 灰度中, RELEASE: 已上架, OFFLINE: 已下架, AUDIT_OFFLINE: 已下架; | [optional]

### Return type

**\Alipay\OpenAPISDK\Model\AlipayOpenMiniVersionListQueryResponseModel**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#api-endpoints)
[[Back to README]](../../README.md)
