<?php
namespace Aws\DataSync;

use Aws\AwsClient;

/**
 * This client is used to interact with the **AWS DataSync** service.
 * @method \Aws\Result cancelTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise cancelTaskExecutionAsync(array $args = [])
 * @method \Aws\Result createAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createAgentAsync(array $args = [])
 * @method \Aws\Result createLocationEfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationEfsAsync(array $args = [])
 * @method \Aws\Result createLocationNfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationNfsAsync(array $args = [])
 * @method \Aws\Result createLocationS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createLocationS3Async(array $args = [])
 * @method \Aws\Result createTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise createTaskAsync(array $args = [])
 * @method \Aws\Result deleteAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteAgentAsync(array $args = [])
 * @method \Aws\Result deleteLocation(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteLocationAsync(array $args = [])
 * @method \Aws\Result deleteTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise deleteTaskAsync(array $args = [])
 * @method \Aws\Result describeAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeAgentAsync(array $args = [])
 * @method \Aws\Result describeLocationEfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationEfsAsync(array $args = [])
 * @method \Aws\Result describeLocationNfs(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationNfsAsync(array $args = [])
 * @method \Aws\Result describeLocationS3(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeLocationS3Async(array $args = [])
 * @method \Aws\Result describeTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskAsync(array $args = [])
 * @method \Aws\Result describeTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise describeTaskExecutionAsync(array $args = [])
 * @method \Aws\Result listAgents(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listAgentsAsync(array $args = [])
 * @method \Aws\Result listLocations(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listLocationsAsync(array $args = [])
 * @method \Aws\Result listTagsForResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTagsForResourceAsync(array $args = [])
 * @method \Aws\Result listTaskExecutions(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTaskExecutionsAsync(array $args = [])
 * @method \Aws\Result listTasks(array $args = [])
 * @method \GuzzleHttp\Promise\Promise listTasksAsync(array $args = [])
 * @method \Aws\Result startTaskExecution(array $args = [])
 * @method \GuzzleHttp\Promise\Promise startTaskExecutionAsync(array $args = [])
 * @method \Aws\Result tagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise tagResourceAsync(array $args = [])
 * @method \Aws\Result untagResource(array $args = [])
 * @method \GuzzleHttp\Promise\Promise untagResourceAsync(array $args = [])
 * @method \Aws\Result updateAgent(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateAgentAsync(array $args = [])
 * @method \Aws\Result updateTask(array $args = [])
 * @method \GuzzleHttp\Promise\Promise updateTaskAsync(array $args = [])
 */
class DataSyncClient extends AwsClient {}
