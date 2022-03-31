<?php
namespace Aws\Ec2;

use Aws\AwsClient;
use Aws\Api\Service;
use Aws\Api\DocModel;
use Aws\Api\ApiProvider;
use Aws\PresignUrlMiddleware;

/**
 * Client used to interact with Amazon EC2.
 *
 * @method \Aws\Result acceptVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise acceptVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result allocateAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateAddressAsync(array $args = [])
 * @method \Aws\Result allocateHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise allocateHostsAsync(array $args = [])
 * @method \Aws\Result assignPrivateIpAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise assignPrivateIpAddressesAsync(array $args = [])
 * @method \Aws\Result associateAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateAddressAsync(array $args = [])
 * @method \Aws\Result associateDhcpOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateDhcpOptionsAsync(array $args = [])
 * @method \Aws\Result associateRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise associateRouteTableAsync(array $args = [])
 * @method \Aws\Result attachClassicLinkVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachClassicLinkVpcAsync(array $args = [])
 * @method \Aws\Result attachInternetGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachInternetGatewayAsync(array $args = [])
 * @method \Aws\Result attachNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachNetworkInterfaceAsync(array $args = [])
 * @method \Aws\Result attachVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachVolumeAsync(array $args = [])
 * @method \Aws\Result attachVpnGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise attachVpnGatewayAsync(array $args = [])
 * @method \Aws\Result authorizeSecurityGroupEgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeSecurityGroupEgressAsync(array $args = [])
 * @method \Aws\Result authorizeSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise authorizeSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result bundleInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise bundleInstanceAsync(array $args = [])
 * @method \Aws\Result cancelBundleTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelBundleTaskAsync(array $args = [])
 * @method \Aws\Result cancelConversionTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelConversionTaskAsync(array $args = [])
 * @method \Aws\Result cancelExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelExportTaskAsync(array $args = [])
 * @method \Aws\Result cancelImportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelImportTaskAsync(array $args = [])
 * @method \Aws\Result cancelReservedInstancesListing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelReservedInstancesListingAsync(array $args = [])
 * @method \Aws\Result cancelSpotFleetRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSpotFleetRequestsAsync(array $args = [])
 * @method \Aws\Result cancelSpotInstanceRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSpotInstanceRequestsAsync(array $args = [])
 * @method \Aws\Result confirmProductInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise confirmProductInstanceAsync(array $args = [])
 * @method \Aws\Result copyImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copyImageAsync(array $args = [])
 * @method \Aws\Result copySnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise copySnapshotAsync(array $args = [])
 * @method \Aws\Result createCustomerGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createCustomerGatewayAsync(array $args = [])
 * @method \Aws\Result createDhcpOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDhcpOptionsAsync(array $args = [])
 * @method \Aws\Result createFlowLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFlowLogsAsync(array $args = [])
 * @method \Aws\Result createImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createImageAsync(array $args = [])
 * @method \Aws\Result createInstanceExportTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInstanceExportTaskAsync(array $args = [])
 * @method \Aws\Result createInternetGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createInternetGatewayAsync(array $args = [])
 * @method \Aws\Result createKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createKeyPairAsync(array $args = [])
 * @method \Aws\Result createNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNatGatewayAsync(array $args = [])
 * @method \Aws\Result createNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkAclAsync(array $args = [])
 * @method \Aws\Result createNetworkAclEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkAclEntryAsync(array $args = [])
 * @method \Aws\Result createNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createNetworkInterfaceAsync(array $args = [])
 * @method \Aws\Result createPlacementGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createPlacementGroupAsync(array $args = [])
 * @method \Aws\Result createReservedInstancesListing(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createReservedInstancesListingAsync(array $args = [])
 * @method \Aws\Result createRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteAsync(array $args = [])
 * @method \Aws\Result createRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRouteTableAsync(array $args = [])
 * @method \Aws\Result createSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSecurityGroupAsync(array $args = [])
 * @method \Aws\Result createSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSnapshotAsync(array $args = [])
 * @method \Aws\Result createSpotDatafeedSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSpotDatafeedSubscriptionAsync(array $args = [])
 * @method \Aws\Result createSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSubnetAsync(array $args = [])
 * @method \Aws\Result createTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTagsAsync(array $args = [])
 * @method \Aws\Result createVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVolumeAsync(array $args = [])
 * @method \Aws\Result createVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcAsync(array $args = [])
 * @method \Aws\Result createVpcEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcEndpointAsync(array $args = [])
 * @method \Aws\Result createVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result createVpnConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpnConnectionAsync(array $args = [])
 * @method \Aws\Result createVpnConnectionRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpnConnectionRouteAsync(array $args = [])
 * @method \Aws\Result createVpnGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createVpnGatewayAsync(array $args = [])
 * @method \Aws\Result deleteCustomerGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteCustomerGatewayAsync(array $args = [])
 * @method \Aws\Result deleteDhcpOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteDhcpOptionsAsync(array $args = [])
 * @method \Aws\Result deleteFlowLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFlowLogsAsync(array $args = [])
 * @method \Aws\Result deleteInternetGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteInternetGatewayAsync(array $args = [])
 * @method \Aws\Result deleteKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteKeyPairAsync(array $args = [])
 * @method \Aws\Result deleteNatGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNatGatewayAsync(array $args = [])
 * @method \Aws\Result deleteNetworkAcl(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkAclAsync(array $args = [])
 * @method \Aws\Result deleteNetworkAclEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkAclEntryAsync(array $args = [])
 * @method \Aws\Result deleteNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteNetworkInterfaceAsync(array $args = [])
 * @method \Aws\Result deletePlacementGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deletePlacementGroupAsync(array $args = [])
 * @method \Aws\Result deleteRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteAsync(array $args = [])
 * @method \Aws\Result deleteRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRouteTableAsync(array $args = [])
 * @method \Aws\Result deleteSecurityGroup(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSecurityGroupAsync(array $args = [])
 * @method \Aws\Result deleteSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSnapshotAsync(array $args = [])
 * @method \Aws\Result deleteSpotDatafeedSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSpotDatafeedSubscriptionAsync(array $args = [])
 * @method \Aws\Result deleteSubnet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSubnetAsync(array $args = [])
 * @method \Aws\Result deleteTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTagsAsync(array $args = [])
 * @method \Aws\Result deleteVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVolumeAsync(array $args = [])
 * @method \Aws\Result deleteVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcAsync(array $args = [])
 * @method \Aws\Result deleteVpcEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcEndpointsAsync(array $args = [])
 * @method \Aws\Result deleteVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result deleteVpnConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpnConnectionAsync(array $args = [])
 * @method \Aws\Result deleteVpnConnectionRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpnConnectionRouteAsync(array $args = [])
 * @method \Aws\Result deleteVpnGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteVpnGatewayAsync(array $args = [])
 * @method \Aws\Result deregisterImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterImageAsync(array $args = [])
 * @method \Aws\Result describeAccountAttributes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAccountAttributesAsync(array $args = [])
 * @method \Aws\Result describeAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAddressesAsync(array $args = [])
 * @method \Aws\Result describeAvailabilityZones(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAvailabilityZonesAsync(array $args = [])
 * @method \Aws\Result describeBundleTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeBundleTasksAsync(array $args = [])
 * @method \Aws\Result describeClassicLinkInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeClassicLinkInstancesAsync(array $args = [])
 * @method \Aws\Result describeConversionTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeConversionTasksAsync(array $args = [])
 * @method \Aws\Result describeCustomerGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeCustomerGatewaysAsync(array $args = [])
 * @method \Aws\Result describeDhcpOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDhcpOptionsAsync(array $args = [])
 * @method \Aws\Result describeExportTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeExportTasksAsync(array $args = [])
 * @method \Aws\Result describeFlowLogs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFlowLogsAsync(array $args = [])
 * @method \Aws\Result describeHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeHostsAsync(array $args = [])
 * @method \Aws\Result describeIdFormat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeIdFormatAsync(array $args = [])
 * @method \Aws\Result describeImageAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImageAttributeAsync(array $args = [])
 * @method \Aws\Result describeImages(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImagesAsync(array $args = [])
 * @method \Aws\Result describeImportImageTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImportImageTasksAsync(array $args = [])
 * @method \Aws\Result describeImportSnapshotTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeImportSnapshotTasksAsync(array $args = [])
 * @method \Aws\Result describeInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceAttributeAsync(array $args = [])
 * @method \Aws\Result describeInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstanceStatusAsync(array $args = [])
 * @method \Aws\Result describeInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInstancesAsync(array $args = [])
 * @method \Aws\Result describeInternetGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeInternetGatewaysAsync(array $args = [])
 * @method \Aws\Result describeKeyPairs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeKeyPairsAsync(array $args = [])
 * @method \Aws\Result describeMovingAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeMovingAddressesAsync(array $args = [])
 * @method \Aws\Result describeNatGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNatGatewaysAsync(array $args = [])
 * @method \Aws\Result describeNetworkAcls(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkAclsAsync(array $args = [])
 * @method \Aws\Result describeNetworkInterfaceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfaceAttributeAsync(array $args = [])
 * @method \Aws\Result describeNetworkInterfaces(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfacesAsync(array $args = [])
 * @method \Aws\Result describePlacementGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePlacementGroupsAsync(array $args = [])
 * @method \Aws\Result describePrefixLists(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describePrefixListsAsync(array $args = [])
 * @method \Aws\Result describeRegions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRegionsAsync(array $args = [])
 * @method \Aws\Result describeReservedInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstancesAsync(array $args = [])
 * @method \Aws\Result describeReservedInstancesListings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstancesListingsAsync(array $args = [])
 * @method \Aws\Result describeReservedInstancesModifications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstancesModificationsAsync(array $args = [])
 * @method \Aws\Result describeReservedInstancesOfferings(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeReservedInstancesOfferingsAsync(array $args = [])
 * @method \Aws\Result describeRouteTables(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRouteTablesAsync(array $args = [])
 * @method \Aws\Result describeScheduledInstanceAvailability(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledInstanceAvailabilityAsync(array $args = [])
 * @method \Aws\Result describeScheduledInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeScheduledInstancesAsync(array $args = [])
 * @method \Aws\Result describeSecurityGroupReferences(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityGroupReferencesAsync(array $args = [])
 * @method \Aws\Result describeSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSecurityGroupsAsync(array $args = [])
 * @method \Aws\Result describeSnapshotAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotAttributeAsync(array $args = [])
 * @method \Aws\Result describeSnapshots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSnapshotsAsync(array $args = [])
 * @method \Aws\Result describeSpotDatafeedSubscription(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotDatafeedSubscriptionAsync(array $args = [])
 * @method \Aws\Result describeSpotFleetInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotFleetInstancesAsync(array $args = [])
 * @method \Aws\Result describeSpotFleetRequestHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotFleetRequestHistoryAsync(array $args = [])
 * @method \Aws\Result describeSpotFleetRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotFleetRequestsAsync(array $args = [])
 * @method \Aws\Result describeSpotInstanceRequests(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotInstanceRequestsAsync(array $args = [])
 * @method \Aws\Result describeSpotPriceHistory(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSpotPriceHistoryAsync(array $args = [])
 * @method \Aws\Result describeStaleSecurityGroups(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeStaleSecurityGroupsAsync(array $args = [])
 * @method \Aws\Result describeSubnets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSubnetsAsync(array $args = [])
 * @method \Aws\Result describeTags(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTagsAsync(array $args = [])
 * @method \Aws\Result describeVolumeAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVolumeAttributeAsync(array $args = [])
 * @method \Aws\Result describeVolumeStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVolumeStatusAsync(array $args = [])
 * @method \Aws\Result describeVolumes(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVolumesAsync(array $args = [])
 * @method \Aws\Result describeVpcAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcAttributeAsync(array $args = [])
 * @method \Aws\Result describeVpcClassicLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcClassicLinkAsync(array $args = [])
 * @method \Aws\Result describeVpcClassicLinkDnsSupport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcClassicLinkDnsSupportAsync(array $args = [])
 * @method \Aws\Result describeVpcEndpointServices(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointServicesAsync(array $args = [])
 * @method \Aws\Result describeVpcEndpoints(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointsAsync(array $args = [])
 * @method \Aws\Result describeVpcPeeringConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcPeeringConnectionsAsync(array $args = [])
 * @method \Aws\Result describeVpcs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpcsAsync(array $args = [])
 * @method \Aws\Result describeVpnConnections(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpnConnectionsAsync(array $args = [])
 * @method \Aws\Result describeVpnGateways(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeVpnGatewaysAsync(array $args = [])
 * @method \Aws\Result detachClassicLinkVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachClassicLinkVpcAsync(array $args = [])
 * @method \Aws\Result detachInternetGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachInternetGatewayAsync(array $args = [])
 * @method \Aws\Result detachNetworkInterface(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachNetworkInterfaceAsync(array $args = [])
 * @method \Aws\Result detachVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachVolumeAsync(array $args = [])
 * @method \Aws\Result detachVpnGateway(array $args = [])
 * @method \GuzzleHttp\Promise\Promise detachVpnGatewayAsync(array $args = [])
 * @method \Aws\Result disableVgwRoutePropagation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableVgwRoutePropagationAsync(array $args = [])
 * @method \Aws\Result disableVpcClassicLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableVpcClassicLinkAsync(array $args = [])
 * @method \Aws\Result disableVpcClassicLinkDnsSupport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disableVpcClassicLinkDnsSupportAsync(array $args = [])
 * @method \Aws\Result disassociateAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateAddressAsync(array $args = [])
 * @method \Aws\Result disassociateRouteTable(array $args = [])
 * @method \GuzzleHttp\Promise\Promise disassociateRouteTableAsync(array $args = [])
 * @method \Aws\Result enableVgwRoutePropagation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableVgwRoutePropagationAsync(array $args = [])
 * @method \Aws\Result enableVolumeIO(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableVolumeIOAsync(array $args = [])
 * @method \Aws\Result enableVpcClassicLink(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableVpcClassicLinkAsync(array $args = [])
 * @method \Aws\Result enableVpcClassicLinkDnsSupport(array $args = [])
 * @method \GuzzleHttp\Promise\Promise enableVpcClassicLinkDnsSupportAsync(array $args = [])
 * @method \Aws\Result getConsoleOutput(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConsoleOutputAsync(array $args = [])
 * @method \Aws\Result getConsoleScreenshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getConsoleScreenshotAsync(array $args = [])
 * @method \Aws\Result getPasswordData(array $args = [])
 * @method \GuzzleHttp\Promise\Promise getPasswordDataAsync(array $args = [])
 * @method \Aws\Result importImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importImageAsync(array $args = [])
 * @method \Aws\Result importInstance(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importInstanceAsync(array $args = [])
 * @method \Aws\Result importKeyPair(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importKeyPairAsync(array $args = [])
 * @method \Aws\Result importSnapshot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importSnapshotAsync(array $args = [])
 * @method \Aws\Result importVolume(array $args = [])
 * @method \GuzzleHttp\Promise\Promise importVolumeAsync(array $args = [])
 * @method \Aws\Result modifyHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyHostsAsync(array $args = [])
 * @method \Aws\Result modifyIdFormat(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyIdFormatAsync(array $args = [])
 * @method \Aws\Result modifyImageAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyImageAttributeAsync(array $args = [])
 * @method \Aws\Result modifyInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstanceAttributeAsync(array $args = [])
 * @method \Aws\Result modifyInstancePlacement(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyInstancePlacementAsync(array $args = [])
 * @method \Aws\Result modifyNetworkInterfaceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyNetworkInterfaceAttributeAsync(array $args = [])
 * @method \Aws\Result modifyReservedInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyReservedInstancesAsync(array $args = [])
 * @method \Aws\Result modifySnapshotAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySnapshotAttributeAsync(array $args = [])
 * @method \Aws\Result modifySpotFleetRequest(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySpotFleetRequestAsync(array $args = [])
 * @method \Aws\Result modifySubnetAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifySubnetAttributeAsync(array $args = [])
 * @method \Aws\Result modifyVolumeAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVolumeAttributeAsync(array $args = [])
 * @method \Aws\Result modifyVpcAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcAttributeAsync(array $args = [])
 * @method \Aws\Result modifyVpcEndpoint(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcEndpointAsync(array $args = [])
 * @method \Aws\Result modifyVpcPeeringConnectionOptions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise modifyVpcPeeringConnectionOptionsAsync(array $args = [])
 * @method \Aws\Result monitorInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise monitorInstancesAsync(array $args = [])
 * @method \Aws\Result moveAddressToVpc(array $args = [])
 * @method \GuzzleHttp\Promise\Promise moveAddressToVpcAsync(array $args = [])
 * @method \Aws\Result purchaseReservedInstancesOffering(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseReservedInstancesOfferingAsync(array $args = [])
 * @method \Aws\Result purchaseScheduledInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise purchaseScheduledInstancesAsync(array $args = [])
 * @method \Aws\Result rebootInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rebootInstancesAsync(array $args = [])
 * @method \Aws\Result registerImage(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerImageAsync(array $args = [])
 * @method \Aws\Result rejectVpcPeeringConnection(array $args = [])
 * @method \GuzzleHttp\Promise\Promise rejectVpcPeeringConnectionAsync(array $args = [])
 * @method \Aws\Result releaseAddress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseAddressAsync(array $args = [])
 * @method \Aws\Result releaseHosts(array $args = [])
 * @method \GuzzleHttp\Promise\Promise releaseHostsAsync(array $args = [])
 * @method \Aws\Result replaceNetworkAclAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceNetworkAclAssociationAsync(array $args = [])
 * @method \Aws\Result replaceNetworkAclEntry(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceNetworkAclEntryAsync(array $args = [])
 * @method \Aws\Result replaceRoute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceRouteAsync(array $args = [])
 * @method \Aws\Result replaceRouteTableAssociation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise replaceRouteTableAssociationAsync(array $args = [])
 * @method \Aws\Result reportInstanceStatus(array $args = [])
 * @method \GuzzleHttp\Promise\Promise reportInstanceStatusAsync(array $args = [])
 * @method \Aws\Result requestSpotFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestSpotFleetAsync(array $args = [])
 * @method \Aws\Result requestSpotInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise requestSpotInstancesAsync(array $args = [])
 * @method \Aws\Result resetImageAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetImageAttributeAsync(array $args = [])
 * @method \Aws\Result resetInstanceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetInstanceAttributeAsync(array $args = [])
 * @method \Aws\Result resetNetworkInterfaceAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetNetworkInterfaceAttributeAsync(array $args = [])
 * @method \Aws\Result resetSnapshotAttribute(array $args = [])
 * @method \GuzzleHttp\Promise\Promise resetSnapshotAttributeAsync(array $args = [])
 * @method \Aws\Result restoreAddressToClassic(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restoreAddressToClassicAsync(array $args = [])
 * @method \Aws\Result revokeSecurityGroupEgress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSecurityGroupEgressAsync(array $args = [])
 * @method \Aws\Result revokeSecurityGroupIngress(array $args = [])
 * @method \GuzzleHttp\Promise\Promise revokeSecurityGroupIngressAsync(array $args = [])
 * @method \Aws\Result runInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runInstancesAsync(array $args = [])
 * @method \Aws\Result runScheduledInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise runScheduledInstancesAsync(array $args = [])
 * @method \Aws\Result startInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startInstancesAsync(array $args = [])
 * @method \Aws\Result stopInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise stopInstancesAsync(array $args = [])
 * @method \Aws\Result terminateInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise terminateInstancesAsync(array $args = [])
 * @method \Aws\Result unassignPrivateIpAddresses(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unassignPrivateIpAddressesAsync(array $args = [])
 * @method \Aws\Result unmonitorInstances(array $args = [])
 * @method \GuzzleHttp\Promise\Promise unmonitorInstancesAsync(array $args = [])
 * @method \Aws\Result describeHostReservationOfferings(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeHostReservationOfferingsAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result describeHostReservations(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeHostReservationsAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result describeIdentityIdFormat(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeIdentityIdFormatAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result getHostReservationPurchasePreview(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getHostReservationPurchasePreviewAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result modifyIdentityIdFormat(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyIdentityIdFormatAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result purchaseHostReservation(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise purchaseHostReservationAsync(array $args = []) (supported in versions 2016-04-01, 2016-09-15, 2016-11-15)
 * @method \Aws\Result acceptReservedInstancesExchangeQuote(array $args = []) (supported in versions 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise acceptReservedInstancesExchangeQuoteAsync(array $args = []) (supported in versions 2016-09-15, 2016-11-15)
 * @method \Aws\Result getReservedInstancesExchangeQuote(array $args = []) (supported in versions 2016-09-15, 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getReservedInstancesExchangeQuoteAsync(array $args = []) (supported in versions 2016-09-15, 2016-11-15)
 * @method \Aws\Result acceptTransitGatewayVpcAttachment(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise acceptTransitGatewayVpcAttachmentAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result acceptVpcEndpointConnections(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise acceptVpcEndpointConnectionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result advertiseByoipCidr(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise advertiseByoipCidrAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result applySecurityGroupsToClientVpnTargetNetwork(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise applySecurityGroupsToClientVpnTargetNetworkAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result assignIpv6Addresses(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise assignIpv6AddressesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result associateClientVpnTargetNetwork(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise associateClientVpnTargetNetworkAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result associateIamInstanceProfile(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise associateIamInstanceProfileAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result associateSubnetCidrBlock(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise associateSubnetCidrBlockAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result associateTransitGatewayRouteTable(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise associateTransitGatewayRouteTableAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result associateVpcCidrBlock(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise associateVpcCidrBlockAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result authorizeClientVpnIngress(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise authorizeClientVpnIngressAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result cancelCapacityReservation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise cancelCapacityReservationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result copyFpgaImage(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise copyFpgaImageAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createCapacityReservation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createCapacityReservationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createClientVpnEndpoint(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createClientVpnEndpointAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createClientVpnRoute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createClientVpnRouteAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createDefaultSubnet(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createDefaultSubnetAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createDefaultVpc(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createDefaultVpcAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createEgressOnlyInternetGateway(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createEgressOnlyInternetGatewayAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createFleet(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createFpgaImage(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createFpgaImageAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createLaunchTemplate(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createLaunchTemplateAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createLaunchTemplateVersion(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createLaunchTemplateVersionAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createNetworkInterfacePermission(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createNetworkInterfacePermissionAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createTransitGateway(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createTransitGatewayAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createTransitGatewayRoute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createTransitGatewayRouteAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createTransitGatewayRouteTable(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createTransitGatewayRouteTableAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createTransitGatewayVpcAttachment(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createTransitGatewayVpcAttachmentAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createVpcEndpointConnectionNotification(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createVpcEndpointConnectionNotificationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result createVpcEndpointServiceConfiguration(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise createVpcEndpointServiceConfigurationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteClientVpnEndpoint(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteClientVpnEndpointAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteClientVpnRoute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteClientVpnRouteAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteEgressOnlyInternetGateway(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteEgressOnlyInternetGatewayAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteFleets(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteFleetsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteFpgaImage(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteFpgaImageAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteLaunchTemplate(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteLaunchTemplateAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteLaunchTemplateVersions(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteLaunchTemplateVersionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteNetworkInterfacePermission(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteNetworkInterfacePermissionAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteTransitGateway(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteTransitGatewayAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteTransitGatewayRoute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteTransitGatewayRouteAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteTransitGatewayRouteTable(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteTransitGatewayRouteTableAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteTransitGatewayVpcAttachment(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteTransitGatewayVpcAttachmentAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteVpcEndpointConnectionNotifications(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteVpcEndpointConnectionNotificationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deleteVpcEndpointServiceConfigurations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deleteVpcEndpointServiceConfigurationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result deprovisionByoipCidr(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise deprovisionByoipCidrAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeAggregateIdFormat(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeAggregateIdFormatAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeByoipCidrs(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeByoipCidrsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeCapacityReservations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeCapacityReservationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeClientVpnAuthorizationRules(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeClientVpnAuthorizationRulesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeClientVpnConnections(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeClientVpnConnectionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeClientVpnEndpoints(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeClientVpnEndpointsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeClientVpnRoutes(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeClientVpnRoutesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeClientVpnTargetNetworks(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeClientVpnTargetNetworksAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeEgressOnlyInternetGateways(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeEgressOnlyInternetGatewaysAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeElasticGpus(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeElasticGpusAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeFleetHistory(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeFleetHistoryAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeFleetInstances(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeFleetInstancesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeFleets(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeFleetsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeFpgaImageAttribute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeFpgaImageAttributeAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeFpgaImages(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeFpgaImagesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeIamInstanceProfileAssociations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeIamInstanceProfileAssociationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeInstanceCreditSpecifications(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeInstanceCreditSpecificationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeLaunchTemplateVersions(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeLaunchTemplateVersionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeLaunchTemplates(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeLaunchTemplatesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeNetworkInterfacePermissions(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeNetworkInterfacePermissionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describePrincipalIdFormat(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describePrincipalIdFormatAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describePublicIpv4Pools(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describePublicIpv4PoolsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeTransitGatewayAttachments(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeTransitGatewayAttachmentsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeTransitGatewayRouteTables(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeTransitGatewayRouteTablesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeTransitGatewayVpcAttachments(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeTransitGatewayVpcAttachmentsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeTransitGateways(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeTransitGatewaysAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeVolumesModifications(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeVolumesModificationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeVpcEndpointConnectionNotifications(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointConnectionNotificationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeVpcEndpointConnections(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointConnectionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeVpcEndpointServiceConfigurations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointServiceConfigurationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result describeVpcEndpointServicePermissions(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise describeVpcEndpointServicePermissionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disableTransitGatewayRouteTablePropagation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disableTransitGatewayRouteTablePropagationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disassociateClientVpnTargetNetwork(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disassociateClientVpnTargetNetworkAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disassociateIamInstanceProfile(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disassociateIamInstanceProfileAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disassociateSubnetCidrBlock(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disassociateSubnetCidrBlockAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disassociateTransitGatewayRouteTable(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disassociateTransitGatewayRouteTableAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result disassociateVpcCidrBlock(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise disassociateVpcCidrBlockAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result enableTransitGatewayRouteTablePropagation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise enableTransitGatewayRouteTablePropagationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result exportClientVpnClientCertificateRevocationList(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise exportClientVpnClientCertificateRevocationListAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result exportClientVpnClientConfiguration(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise exportClientVpnClientConfigurationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result exportTransitGatewayRoutes(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise exportTransitGatewayRoutesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result getLaunchTemplateData(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getLaunchTemplateDataAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result getTransitGatewayAttachmentPropagations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getTransitGatewayAttachmentPropagationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result getTransitGatewayRouteTableAssociations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getTransitGatewayRouteTableAssociationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result getTransitGatewayRouteTablePropagations(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise getTransitGatewayRouteTablePropagationsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result importClientVpnClientCertificateRevocationList(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise importClientVpnClientCertificateRevocationListAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyCapacityReservation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyCapacityReservationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyClientVpnEndpoint(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyClientVpnEndpointAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyFleet(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyFleetAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyFpgaImageAttribute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyFpgaImageAttributeAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyInstanceCapacityReservationAttributes(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyInstanceCapacityReservationAttributesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyInstanceCreditSpecification(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyInstanceCreditSpecificationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyInstanceEventStartTime(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyInstanceEventStartTimeAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyLaunchTemplate(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyLaunchTemplateAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyTransitGatewayVpcAttachment(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyTransitGatewayVpcAttachmentAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyVolume(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyVolumeAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyVpcEndpointConnectionNotification(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyVpcEndpointConnectionNotificationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyVpcEndpointServiceConfiguration(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyVpcEndpointServiceConfigurationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyVpcEndpointServicePermissions(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyVpcEndpointServicePermissionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result modifyVpcTenancy(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise modifyVpcTenancyAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result provisionByoipCidr(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise provisionByoipCidrAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result rejectTransitGatewayVpcAttachment(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise rejectTransitGatewayVpcAttachmentAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result rejectVpcEndpointConnections(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise rejectVpcEndpointConnectionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result replaceIamInstanceProfileAssociation(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise replaceIamInstanceProfileAssociationAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result replaceTransitGatewayRoute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise replaceTransitGatewayRouteAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result resetFpgaImageAttribute(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise resetFpgaImageAttributeAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result revokeClientVpnIngress(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise revokeClientVpnIngressAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result searchTransitGatewayRoutes(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise searchTransitGatewayRoutesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result terminateClientVpnConnections(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise terminateClientVpnConnectionsAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result unassignIpv6Addresses(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise unassignIpv6AddressesAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result updateSecurityGroupRuleDescriptionsEgress(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise updateSecurityGroupRuleDescriptionsEgressAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result updateSecurityGroupRuleDescriptionsIngress(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise updateSecurityGroupRuleDescriptionsIngressAsync(array $args = []) (supported in versions 2016-11-15)
 * @method \Aws\Result withdrawByoipCidr(array $args = []) (supported in versions 2016-11-15)
 * @method \GuzzleHttp\Promise\Promise withdrawByoipCidrAsync(array $args = []) (supported in versions 2016-11-15)
 */
class Ec2Client extends AwsClient
{
    public function __construct(array $args)
    {
        $args['with_resolved'] = function (array $args) {
            $this->getHandlerList()->appendInit(
                PresignUrlMiddleware::wrap(
                    $this,
                    $args['endpoint_provider'],
                    [
                        'operations' => [
                            'CopySnapshot',
                        ],
                        'service' => 'ec2',
                        'presign_param' => 'PresignedUrl',
                    ]
                ),
                'ec2.copy_snapshot'
            );
        };

        parent::__construct($args);
    }

    /**
     * @internal
     * @codeCoverageIgnore
     */
    public static function applyDocFilters(array $api, array $docs)
    {
        // Several copy snapshot parameters are optional.
        $docs['shapes']['String']['refs']['CopySnapshotRequest$PresignedUrl']
            = '<div class="alert alert-info">The SDK will compute this value '
            . 'for you on your behalf.</div>';
        $docs['shapes']['String']['refs']['CopySnapshotRequest$DestinationRegion']
            = '<div class="alert alert-info">The SDK will populate this '
            . 'parameter on your behalf using the configured region value of '
            . 'the client.</div>';

        return [
            new Service($api, ApiProvider::defaultProvider()),
            new DocModel($docs)
        ];
    }
}
