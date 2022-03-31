<?php
namespace Aws\Lightsail;

use Aws\AwsClient;

/**
 * This client is used to interact with the **Amazon Lightsail** service.
 * @method \Aws\Result allocateStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateStaticIpAsync(array $args = [])
 * @method \Aws\Result attachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachDiskAsync(array $args = [])
 * @method \Aws\Result attachInstancesToLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachInstancesToLoadBalancerAsync(array $args = [])
 * @method \Aws\Result attachLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \Aws\Result attachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachStaticIpAsync(array $args = [])
 * @method \Aws\Result closeInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise closeInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \Aws\Result createCloudFormationStack(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCloudFormationStackAsync(array $args = [])
 * @method \Aws\Result createDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskAsync(array $args = [])
 * @method \Aws\Result createDiskFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskFromSnapshotAsync(array $args = [])
 * @method \Aws\Result createDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDiskSnapshotAsync(array $args = [])
 * @method \Aws\Result createDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainAsync(array $args = [])
 * @method \Aws\Result createDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDomainEntryAsync(array $args = [])
 * @method \Aws\Result createInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result createInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesAsync(array $args = [])
 * @method \Aws\Result createInstancesFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstancesFromSnapshotAsync(array $args = [])
 * @method \Aws\Result createKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyPairAsync(array $args = [])
 * @method \Aws\Result createLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerAsync(array $args = [])
 * @method \Aws\Result createLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \Aws\Result createRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result createRelationalDatabaseFromSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseFromSnapshotAsync(array $args = [])
 * @method \Aws\Result createRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiskAsync(array $args = [])
 * @method \Aws\Result deleteDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDiskSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainAsync(array $args = [])
 * @method \Aws\Result deleteDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDomainEntryAsync(array $args = [])
 * @method \Aws\Result deleteInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceAsync(array $args = [])
 * @method \Aws\Result deleteInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyPairAsync(array $args = [])
 * @method \Aws\Result deleteKnownHostKeys(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKnownHostKeysAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerAsync(array $args = [])
 * @method \Aws\Result deleteLoadBalancerTlsCertificate(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLoadBalancerTlsCertificateAsync(array $args = [])
 * @method \Aws\Result deleteRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result deleteRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \Aws\Result detachDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachDiskAsync(array $args = [])
 * @method \Aws\Result detachInstancesFromLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachInstancesFromLoadBalancerAsync(array $args = [])
 * @method \Aws\Result detachStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachStaticIpAsync(array $args = [])
 * @method \Aws\Result downloadDefaultKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise downloadDefaultKeyPairAsync(array $args = [])
 * @method \Aws\Result exportSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise exportSnapshotAsync(array $args = [])
 * @method \Aws\Result getActiveNames(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getActiveNamesAsync(array $args = [])
 * @method \Aws\Result getBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBlueprintsAsync(array $args = [])
 * @method \Aws\Result getBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getBundlesAsync(array $args = [])
 * @method \Aws\Result getCloudFormationStackRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getCloudFormationStackRecordsAsync(array $args = [])
 * @method \Aws\Result getDisk(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskAsync(array $args = [])
 * @method \Aws\Result getDiskSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskSnapshotAsync(array $args = [])
 * @method \Aws\Result getDiskSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDiskSnapshotsAsync(array $args = [])
 * @method \Aws\Result getDisks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDisksAsync(array $args = [])
 * @method \Aws\Result getDomain(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainAsync(array $args = [])
 * @method \Aws\Result getDomains(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getDomainsAsync(array $args = [])
 * @method \Aws\Result getExportSnapshotRecords(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getExportSnapshotRecordsAsync(array $args = [])
 * @method \Aws\Result getInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAsync(array $args = [])
 * @method \Aws\Result getInstanceAccessDetails(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceAccessDetailsAsync(array $args = [])
 * @method \Aws\Result getInstanceMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceMetricDataAsync(array $args = [])
 * @method \Aws\Result getInstancePortStates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancePortStatesAsync(array $args = [])
 * @method \Aws\Result getInstanceSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotAsync(array $args = [])
 * @method \Aws\Result getInstanceSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceSnapshotsAsync(array $args = [])
 * @method \Aws\Result getInstanceState(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstanceStateAsync(array $args = [])
 * @method \Aws\Result getInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getInstancesAsync(array $args = [])
 * @method \Aws\Result getKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairAsync(array $args = [])
 * @method \Aws\Result getKeyPairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getKeyPairsAsync(array $args = [])
 * @method \Aws\Result getLoadBalancer(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerAsync(array $args = [])
 * @method \Aws\Result getLoadBalancerMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerMetricDataAsync(array $args = [])
 * @method \Aws\Result getLoadBalancerTlsCertificates(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancerTlsCertificatesAsync(array $args = [])
 * @method \Aws\Result getLoadBalancers(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getLoadBalancersAsync(array $args = [])
 * @method \Aws\Result getOperation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationAsync(array $args = [])
 * @method \Aws\Result getOperations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsAsync(array $args = [])
 * @method \Aws\Result getOperationsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getOperationsForResourceAsync(array $args = [])
 * @method \Aws\Result getRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRegionsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseBlueprints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseBlueprintsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseBundles(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseBundlesAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseEventsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseLogEvents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseLogEventsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseLogStreams(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseLogStreamsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseMasterUserPassword(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseMasterUserPasswordAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseMetricData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseMetricDataAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseParametersAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseSnapshotAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabaseSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabaseSnapshotsAsync(array $args = [])
 * @method \Aws\Result getRelationalDatabases(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getRelationalDatabasesAsync(array $args = [])
 * @method \Aws\Result getStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpAsync(array $args = [])
 * @method \Aws\Result getStaticIps(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getStaticIpsAsync(array $args = [])
 * @method \Aws\Result importKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyPairAsync(array $args = [])
 * @method \Aws\Result isVpcPeered(array $args = [])
 * @method \GuzzleHttp\Promise\Promise isVpcPeeredAsync(array $args = [])
 * @method \Aws\Result openInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise openInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result peerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise peerVpcAsync(array $args = [])
 * @method \Aws\Result putInstancePublicPorts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise putInstancePublicPortsAsync(array $args = [])
 * @method \Aws\Result rebootInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstanceAsync(array $args = [])
 * @method \Aws\Result rebootRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result releaseStaticIp(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseStaticIpAsync(array $args = [])
 * @method \Aws\Result startInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstanceAsync(array $args = [])
 * @method \Aws\Result startRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result stopInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstanceAsync(array $args = [])
 * @method \Aws\Result stopRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result unpeerVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unpeerVpcAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateDomainEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateDomainEntryAsync(array $args = [])
 * @method \Aws\Result updateLoadBalancerAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateLoadBalancerAttributeAsync(array $args = [])
 * @method \Aws\Result updateRelationalDatabase(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRelationalDatabaseAsync(array $args = [])
 * @method \Aws\Result updateRelationalDatabaseParameters(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRelationalDatabaseParametersAsync(array $args = [])
 */
class LightsailClient extends AwsClient {}
