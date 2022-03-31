<?php
namespace Aws\ElasticLoadBalancing;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Elastic Load Balancing** service.
 *
 * @method \Aws\Result addTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise addTagsAsync(array $args = [])
 * @method \Aws\Result applySecurityGroupsToLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise applySecurityGroupsToLoadBalancerAsync(array $args = [])
 * @method \Aws\Result attachLoadBalancerToSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerToSubnetsAsync(array $args = [])
 * @method \Aws\Result configureHealthCheck(array $args = [])
 * @method \GuzzleHttp\Promise\Promise configureHealthCheckAsync(array $args = [])
 * @method \Aws\Result createAppCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAppCookieStickinessPolicyAsync(array $args = [])
 * @method \Aws\Result createLBCookieStickinessPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLBCookieStickinessPolicyAsync(array $args = [])
 * @method \Aws\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \Aws\Result createLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerListenersAsync(array $args = [])
 * @method \Aws\Result createLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerPolicyAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancerListeners(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerListenersAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancerPolicy(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerPolicyAsync(array $args = [])
 * @method \Aws\Result deregisterInstancesFromLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterInstancesFromLoadBalancerAsync(array $args = [])
 * @method \Aws\Result describeAccountLimits(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountLimitsAsync(array $args = [])
 * @method \Aws\Result describeInstanceHealth(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceHealthAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerAttributesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerPolicies(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerPoliciesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancerPolicyTypes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancerPolicyTypesAsync(array $args = [])
 * @method \Aws\Result describeLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLoadBalancersAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result detachLoadBalancerFromSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachLoadBalancerFromSubnetsAsync(array $args = [])
 * @method \Aws\Result disableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \Aws\Result enableAvailabilityZonesForLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableAvailabilityZonesForLoadBalancerAsync(array $args = [])
 * @method \Aws\Result modifyLoadBalancerAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyLoadBalancerAttributesAsync(array $args = [])
 * @method \Aws\Result registerInstancesWithLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerInstancesWithLoadBalancerAsync(array $args = [])
 * @method \Aws\Result removeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise removeTagsAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerListenerSSLCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerListenerSSLCertificateAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerPoliciesForBackendServer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerPoliciesForBackendServerAsync(array $args = [])
 * @method \Aws\Result setLoadBalancerPoliciesOfListener(array $args = [])
 * @method \GuzzleHttp\Promise\Promise setLoadBalancerPoliciesOfListenerAsync(array $args = [])
 */
class ElasticLoadBalancingClient extends AwsClient {}
