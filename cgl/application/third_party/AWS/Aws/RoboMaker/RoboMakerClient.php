<?php
namespace Aws\RoboMaker;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS RoboMaker** service.
 * @method \Aws\Result batchDescribeSimulationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise batchDescribeSimulationJobAsync(array $args = [])
 * @method \Aws\Result cancelSimulationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelSimulationJobAsync(array $args = [])
 * @method \Aws\Result createDeploymentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createDeploymentJobAsync(array $args = [])
 * @method \Aws\Result createFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createFleetAsync(array $args = [])
 * @method \Aws\Result createRobot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRobotAsync(array $args = [])
 * @method \Aws\Result createRobotApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRobotApplicationAsync(array $args = [])
 * @method \Aws\Result createRobotApplicationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createRobotApplicationVersionAsync(array $args = [])
 * @method \Aws\Result createSimulationApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSimulationApplicationAsync(array $args = [])
 * @method \Aws\Result createSimulationApplicationVersion(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSimulationApplicationVersionAsync(array $args = [])
 * @method \Aws\Result createSimulationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createSimulationJobAsync(array $args = [])
 * @method \Aws\Result deleteFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteFleetAsync(array $args = [])
 * @method \Aws\Result deleteRobot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRobotAsync(array $args = [])
 * @method \Aws\Result deleteRobotApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteRobotApplicationAsync(array $args = [])
 * @method \Aws\Result deleteSimulationApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteSimulationApplicationAsync(array $args = [])
 * @method \Aws\Result deregisterRobot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deregisterRobotAsync(array $args = [])
 * @method \Aws\Result describeDeploymentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeDeploymentJobAsync(array $args = [])
 * @method \Aws\Result describeFleet(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeFleetAsync(array $args = [])
 * @method \Aws\Result describeRobot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRobotAsync(array $args = [])
 * @method \Aws\Result describeRobotApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeRobotApplicationAsync(array $args = [])
 * @method \Aws\Result describeSimulationApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSimulationApplicationAsync(array $args = [])
 * @method \Aws\Result describeSimulationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeSimulationJobAsync(array $args = [])
 * @method \Aws\Result listDeploymentJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listDeploymentJobsAsync(array $args = [])
 * @method \Aws\Result listFleets(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listFleetsAsync(array $args = [])
 * @method \Aws\Result listRobotApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRobotApplicationsAsync(array $args = [])
 * @method \Aws\Result listRobots(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listRobotsAsync(array $args = [])
 * @method \Aws\Result listSimulationApplications(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSimulationApplicationsAsync(array $args = [])
 * @method \Aws\Result listSimulationJobs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listSimulationJobsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result registerRobot(array $args = [])
 * @method \GuzzleHttp\Promise\Promise registerRobotAsync(array $args = [])
 * @method \Aws\Result restartSimulationJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise restartSimulationJobAsync(array $args = [])
 * @method \Aws\Result syncDeploymentJob(array $args = [])
 * @method \GuzzleHttp\Promise\Promise syncDeploymentJobAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateRobotApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateRobotApplicationAsync(array $args = [])
 * @method \Aws\Result updateSimulationApplication(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateSimulationApplicationAsync(array $args = [])
 */
class RoboMakerClient extends AwsClient {}
