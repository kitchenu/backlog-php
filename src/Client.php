<?php

namespace Kitchenu\Backlog;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use InvalidArgumentException;
use Kitchenu\Backlog\Exception\AuthorizedExceotion;
use Kitchenu\Backlog\Exception\BadRequestExceotion;
use Kitchenu\Backlog\Exception\BacklogException;

/**
 * @method Response getSpace()
 * @method Response getSpaceActivities(array $params = [])
 * @method Response getSpaceImage()
 * @method Response getSpaceNotification()
 * @method Response putSpaceNotification()
 * @method Response postSpaceAttachment(array $params, $filePath)
 * @method Response getSpaceDiskUsage()
 * @method Response getUsers()
 * @method Response getUser(array $params = [])
 * @method Response postUsers(array $params = [])
 * @method Response patchUser(array $params = [])
 * @method Response deleteUser(array $params = [])
 * @method Response getUsersMyself()
 * @method Response getUserIcon()
 * @method Response getUserActivities(array $params = [])
 * @method Response getUserStars(array $params = [])
 * @method Response getUserStarsCount(array $params = [])
 * @method Response getUsersMyselfRecentlyViewedIssues(array $params = [])
 * @method Response getUsersMyselfRecentlyViewedProjects(array $params = [])
 * @method Response getUsersMyselfRecentlyViewedWikis(array $params = [])
 * @method Response getGroups(array $params = [])
 * @method Response getGroup(array $params = [])
 * @method Response postGroups(array $params = [])
 * @method Response patchGroup(array $params = [])
 * @method Response deleteGroup(array $params = [])
 * @method Response getStatuses()
 * @method Response getResolution()
 * @method Response getPriorities()
 * @method Response getProjects(array $params = [])
 * @method Response postProjects(array $params = [])
 * @method Response getProject(array $params = [])
 * @method Response patchProjects(array $params = [])
 * @method Response deleteProject(array $params = [])
 * @method Response getProjectImage(array $params = [])
 * @method Response getProjectActivities(array $params = [])
 * @method Response postProjectUsers(array $params = [])
 * @method Response getProjectUsers(array $params = [])
 * @method Response deleteProjectUsers(array $params = [])
 * @method Response postProjectAdministrators(array $params = [])
 * @method Response getProjectsAdministrators(array $params = [])
 * @method Response deleteProjectAdministrators(array $params = [])
 * @method Response getProjectsIssueTypes(array $params = [])
 * @method Response postProjectIssueTypes(array $params = [])
 * @method Response patchProjectIssueType(array $params = [])
 * @method Response deleteProjectIssueType(array $params = [])
 * @method Response getProjectCategories(array $params = [])
 * @method Response postProjectCategories(array $params = [])
 * @method Response patchProjectCategory(array $params = [])
 * @method Response deleteProjectCategory(array $params = [])
 * @method Response getProjectVersions(array $params = [])
 * @method Response postProjectVersions(array $params = [])
 * @method Response patchProjectVersion(array $params = [])
 * @method Response deleteProjectVersion(array $params = [])
 * @method Response getProjectCustomFields(array $params = [])
 * @method Response postProjectCustomFields(array $params = [])
 * @method Response patchProjectCustomField(array $params = [])
 * @method Response deleteProjectCustomField(array $params = [])
 * @method Response getProjectCustomFieldItems(array $params = [])
 * @method Response patchProjectCustomFieldItem(array $params = [])
 * @method Response deleteProjectCustomFieldItem(array $params = [])
 * @method Response getProjectFilesMetadata(array $params = [])
 * @method Response getProjectFile(array $params = [])
 * @method Response getProjectDiskUsage(array $params = [])
 * @method Response getProjectWebhooks(array $params = [])
 * @method Response postProjectWebhooks(array $params = [])
 * @method Response getProjectWebhook(array $params = [])
 * @method Response patchProjectWebhook(array $params = [])
 * @method Response deleteProjectWebhook(array $params = [])
 * @method Response getIssues(array $params = [])
 * @method Response getIssuesCount(array $params = [])
 * @method Response postIssues(array $params = [])
 * @method Response getIssue(array $params = [])
 * @method Response patchIssue(array $params = [])
 * @method Response deleteIssue(array $params = [])
 * @method Response getIssueComments(array $params = [])
 * @method Response postIssueComments(array $params = []);
 * @method Response getIssueCommentsCount(array $params = [])
 * @method Response getIssueComment(array $params = [])
 * @method Response patchIssueComment(array $params = [])
 * @method Response getIssueCommentNotifications(array $params = [])
 * @method Response postIssueCommentNotifications(array $params = [])
 * @method Response getIssueAttachments(array $params = [])
 * @method Response getIssueAttachment(array $params = [])
 * @method Response delteIssueAttachment(array $params = [])
 * @method Response getIssueSharedFiles(array $params = [])
 * @method Response postIssueSharedFiles(array $params = [])
 * @method Response deleteIssueSharedFile(array $params = []
 * @method Response getWikis(array $params = [])
 * @method Response getWikisCountarray $params = []()
 * @method Response getWikisTags(array $params = [])
 * @method Response postWikis(array $params = [])
 * @method Response getWiki(array $params = [])
 * @method Response patchWiki(array $params = [])
 * @method Response deleteWiki(array $params = [])
 * @method Response getWikiAttachments(array $params = [])
 * @method Response postWikiAttachments(array $params)
 * @method Response getWikiAttachment(array $params = [])
 * @method Response deleteWikiAttachment(array $params = [])
 * @method Response getWikiSharedFiles(array $params = [])
 * @method Response postWikiSharedFiles(array $params = [])
 * @method Response delteWikiSharedFile(array $params = [])
 * @method Response getWikiHistory(array $params = [])
 * @method Response getWikiStars(array $params = [])
 * @method Response postStars(array $params = [])
 * @method Response getNotifications(array $params = [])
 * @method Response getNotificationsCount(array $params = [])
 * @method Response postNotificationsMarkAsRead(array $params = [])
 * @method Response postNotificationMarkAsRead(array $params = [])
 * @method Response getProjectGitRepositories(array $params = [])
 * @method Response getProjectGitRepository(array $params = [])
 * @method Response getProjectGitRepositoryPullRequests(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestsCount(array $params = [])
 * @method Response postProjectGitRepositoryPullRequests(array $params = [])
 * @method Response getProjectGitRepositoryPullRequest(array $params = [])
 * @method Response patchProjectGitRepositoryPullRequest(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestComments(array $params = [])
 * @method Response postProjectGitRepositoryPullRequestComments(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestCommentsCount(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestComment(array $params = [])
 * @method Response patchProjectGitRepositoryPullRequestComment(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestAttachments(array $params = [])
 * @method Response getProjectGitRepositoryPullRequestAttachment(array $params = [])
 * @method Response deleteProjectGitRepositoryPullRequestAttachment(array $params = [])
 * @method Response getUserWatchings(array $params = [])
 * @method Response getUserWatchingsCount(array $params = [])
 * @method Response getWtching(array $params = [])
 * @method Response postWatchings(array $params = [])
 * @method Response patchWatching(array $params = [])
 * @method Response deleteWatching(array $params = [])
 * @method Response postWatchingMarkAsRead(array $params = [])
 * @method Response getProjectGroups(array $params = [])
 * @method Response postProjectGroups(array $params = [])
 * @method Response deleteProjectGroups(array $params = [])
 * @method Response getGroupIcon(array $params = [])
 * @method Response getSspaceLicence(array $params = [])
 **/
class Client
{
    const GET_SPACE                                               = 'space';
    const GET_SPACE_ACTIVITIES                                    = 'space/activities';
    const GET_SPACE_IMAGE                                         = 'space/image';
    const GET_SPACE_NOTIFCATION                                   = 'space/notification';
    const PUT_SPACE_NOTIFCATION                                   = 'space/notification';
    const GET_SPACE_DISK_USAGE                                    = 'space/diskUsage';
    const POST_SPACE_ATTACHMENT                                   = 'space/attachment';
    const GET_USERS                                               = 'users';
    const GET_USER                                                = 'users/:userId';
    const POST_USERS                                              = 'users';
    const PATCH_USER                                              = 'users/:userId';
    const DELETE_USER                                             = 'users/:userId';
    const GET_USERS_MYSELF                                        = 'users/myself';
    const GET_USER_ICON                                           = 'users/:userId/icon';
    const GET_USER_ACTIVITIES                                     = 'users/:userId/activities';
    const GET_USER_STARS                                          = 'users/:userId/stars';
    const GET_USER_STARS_COUNT                                    = 'users/:userId/stars/count';
    const GET_USER_MTSELF_RECENTLYVIEWEDISSUES                    = 'users/myself/recentlyViewedIssues';
    const GET_USER_MTSELF_RECENTLYVIEWEDPROJECTS                  = 'users/myself/recentlyViewedProjects';
    const GET_USER_MTSELF_RECENTLYVIEWEDWIKIS                     = 'users/myself/recentlyViewedWikis';
    const GET_GROUPS                                              = 'groups';
    const POST_GROUPS                                             = 'groups';
    const GET_GROUP                                               = 'groups/:groupId';
    const PATCH_GROUP                                             = 'groups/:groupId';
    const DELETE_GROUP                                            = 'groups/:groupId';
    const GET_STATUSES                                            = 'statuses';
    const GET_RESOLUTION                                          = 'resolution';
    const GET_PRIORITIES                                          = 'priorities';
    const GET_PROJECTS                                            = 'projects';
    const POST_PROJECTS                                           = 'projects';
    const GET_PROJECT                                             = 'projects/:projectIdOrKey';
    const PATCH_PROJECT                                           = 'projects/:projectIdOrKey';
    const DELETE_PROJECT                                          = 'projects/:projectIdOrKey';
    const GET_PROJECT_IMAGE                                       = 'projects/:projectIdOrKey/image';
    const GET_PROJECT_ACTIVITIES                                  = 'projects/:projectIdOrKey/activities';
    const POST_PROJECT_USERS                                      = 'projects/:projectIdOrKey/users';
    const GET_PROJECT_USERS                                       = 'projects/:projectIdOrKey/users';
    const DELETE_PROJECT_USERS                                    = 'projects/:projectIdOrKey/users';
    const POST_PROJECT_ADMINISTRATORS                             = 'projects/:projectIdOrKey/administrators';
    const GET_PROJECT_ADMINISTRATORS                              = 'projects/:projectIdOrKey/administrators';
    const DELETE_PROJECT_ADMINISTRATORS                           = 'projects/:projectIdOrKey/administrators';
    const GET_PROJECT_ISSURETYPES                                 = 'projects/:projectIdOrKey/issueTypes';
    const POST_PROJECT_ISSURETYPES                                = 'projects/:projectIdOrKey/issueTypes';
    const PATCH_PROJECT_ISSURETYPE                                = 'projects/:projectIdOrKey/issueTypes/:id';
    const DELETE_PROJECT_ISSURETYPE                               = 'projects/:projectIdOrKey/issueTypes/:id';
    const GET_PROJECT_CATEGORIES                                  = 'projects/:projectIdOrKey/categories';
    const POST_PROJECT_CATEGORIES                                 = 'projects/:projectIdOrKey/categories';
    const PATCH_PROJECT_CATEGORY                                  = 'projects/:projectIdOrKey/categories/:id';
    const DELETE_PROJECT_CATEGORY                                 = 'projects/:projectIdOrKey/categories/:id';
    const GET_PROJECT_VERSIONS                                    = 'projects/:projectIdOrKey/versions';
    const POST_PROJECT_VERSIONS                                   = 'projects/:projectIdOrKey/versions';
    const PATCH_PROJECT_VERSION                                   = 'projects/:projectIdOrKey/versions/:id';
    const DELETE_PROJECT_VERSION                                  = 'projects/:projectIdOrKey/versions/:id';
    const GET_PROJECT_CUSTOMFIELDS                                = 'projects/:projectIdOrKey/customFields';
    const POST_PROJECT_CUSTOMFIELDS                               = 'projects/:projectIdOrKey/customFields';
    const PATCH_PROJECT_CUSTOMFIELD                               = 'projects/:projectIdOrKey/customFields/:id';
    const DELETE_PROJECT_CUSTOMFIELD                              = 'projects/:projectIdOrKey/customFields/:id';
    const GET_PROJECT_CUSTOMFIELD_ITEMS                           = 'projects/:projectIdOrKey/customFields/:id/items';
    const PATCH_PROJECT_CUSTOMFIELD_ITEM                          = 'projects/:projectIdOrKey/customFields/:id/items/:itemId';
    const DELETE_PROJECT_CUSTOMFIELD_ITEM                         = 'projects/:projectIdOrKey/customFields/:id/items/:itemId';
    const GET_PROJECT_FILES_METADATA                              = 'projects/:projectIdOrKey/files/metadata/:path';
    const GET_PROJECT_FILE                                        = 'projects/:projectIdOrKey/files/:sharedFileId';
    const GET_PROJECT_DISK_USEAGE                                 = 'projects/:projectIdOrKey/diskUsage';
    const GET_WEBHOOKS                                            = 'projects/:projectIdOrKey/webhooks';
    const POST_WEBHOOKS                                           = 'projects/:projectIdOrKey/webhooks';
    const GET_WEBHOOK                                             = 'projects/:projectIdOrKey/webhooks/:webhookId';
    const PATCH_WEBHOOK                                           = 'projects/:projectIdOrKey/webhooks/:webhookId';
    const DELETE_WEBHOOK                                          = 'projects/:projectIdOrKey/webhooks/:webhookId';
    const GET_ISSUES                                              = 'issues';
    const GET_ISSUES_COUNT                                        = 'issues/count';
    const POST_ISSUES                                             = 'issues';
    const GET_ISSUE                                               = 'issues/:issueIdOrKey';
    const PATCH_ISSUE                                             = 'issues/:issueIdOrKey';
    const DELETE_ISSUE                                            = 'issues/:issueIdOrKey';
    const GET_ISSUE_COMMENTS                                      = 'issues/:issueIdOrKey/comments';
    const POST_ISSUE_COMMENTS                                     = 'issues/:issueIdOrKey/comments';
    const GET_ISSUES_COMMENTS_COUNT                               = 'issues/:issueIdOrKey/comments/count';
    const GET_ISSUE_COMMENT                                       = 'issues/:issueIdOrKey/comments/:commentId';
    const PATCH_ISSUE_COMMENT                                     = 'issues/:issueIdOrKey/comments/:commentId';
    const GET_ISSUE_COMMENT_NOTIFICATIONS                         = 'issues/:issueIdOrKey/comments/:commentId/notifications';
    const POST_ISSUE_COMMENT_NOTIFICATIONS                        = 'issues/:issueIdOrKey/comments/:commentId/notifications';
    const GET_ISSUE_ATTACHMENTS                                   = 'issues/:issueIdOrKey/attachments';
    const GET_ISSUE_ATTACHMENT                                    = 'issues/:issueIdOrKey/attachments/:attachmentId';
    const DELETE_ISSUE_ATTACHMENT                                 = 'issues/:issueIdOrKey/attachments/:attachmentId';
    const GET_ISSUE_SHARED_FILES                                  = 'issues/:issueIdOrKey/sharedFiles';
    const POST_ISSUE_SHARED_FILES                                 = 'issues/:issueIdOrKey/sharedFiles';
    const DELETE_ISSUE_SHARED_FILE                                = 'issues/:issueIdOrKey/sharedFiles/:id';
    const GET_WIKIS                                               = 'wikis';
    const GET_WIKIS_COUNT                                         = 'wikis/count';
    const GET_WIKIS_TAGS                                          = 'wikis/tags';
    const POST_WIKIS                                              = 'wikis';
    const GET_WIKI                                                = 'wikis/:wikiId';
    const PATCH_WIKI                                              = 'wikis/:wikiId';
    const DELETE_WIKI                                             = 'wikis/:wikiId';
    const GET_WIKI_ATTACHMENTS                                    = 'wikis/:wikiId/attachments';
    const POST_WIKI_ATTACHMENTS                                   = 'wikis/:wikiId/attachments';
    const GET_WIKI_ATTACHMENT                                     = 'wikis/:wikiId/attachments/:attachmentId';
    const DELETE_WIKI_ATTACHMENT                                  = 'wikis/:wikiId/attachments/:attachmentId';
    const GET_WIKI_SHARED_FILES                                   = 'wikis/:wikiId/sharedFiles';
    const POST_WIKI_SHARED_FILES                                  = 'wikis/:wikiId/sharedFiles';
    const DELETE_WIKI_SHARED_FILE                                 = 'wikis/:wikiId/sharedFiles/:id';
    const GET_WIKI_HISTORY                                        = 'wikis/:wikiId/history';
    const GET_WIKI_STARS                                          = 'wikis/:wikiId/stars';
    const POST_STARS                                              = 'stars';
    const GET_NOTIFICATIONS                                       = 'notifications';
    const GET_NOTIFICATIONS_COUNT                                 = 'notifications/count';
    const POST_NOTIFICATIONS_MARK_READ                            = 'notifications/markAsRead';
    const POST_NOTIFICATION_MARK_READ                             = 'notifications/:id/markAsRead';
    const GET_PROJECT_GIT_REPOSITORIES                            = 'projects/:projectIdOrKey/git/repositories';
    const GET_PROJECT_GIT_REPOSITORIE                             = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUESTS               = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUESTS_COUNT         = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/count';
    const POST_PROJECT_GIT_REPOSITORIE_PULL_REQUESTS              = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST                = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number';
    const PATCH_PROJECT_GIT_REPOSITORIE_PULL_REQUEST              = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_COMMENTS       = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/comments';
    const POST_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_COMMENTS      = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/comments';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_COMMENTS_COUNT = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/comments/count';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_COMMENT        = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/comments/:commentId';
    const PATCH_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_COMMENT      = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/comments/:commentId';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_ATTACHMENTS    = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/attachments';
    const GET_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_ATTACHMENT     = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/attachments/:attachmentId';
    const DELETE_PROJECT_GIT_REPOSITORIE_PULL_REQUEST_ATTACHMENT  = 'projects/:projectIdOrKey/git/repositories/:repoIdOrName/pullRequests/:number/attachments/:attachmentId';
    const GET_USER_WATCHINGS                                      = 'users/:userId/watchings';
    const GET_USER_WATCHINGS_COUNT                                = 'users/:userId/watchings/count';
    const GET_WATCHING                                            = 'watchings/:watchingId';
    const POST_WATCHINGS                                          = 'watchings';
    const PATCH_WATCHING                                          = 'watchings/:watchingId';
    const DELETE_WATCHING                                         = 'watchings/:watchingId';
    const POST_WATCHING_MARK_AS_REA                               = 'watchings/:watchId/markAsRead';
    const GET_PROJECT_GROUPS                                      = 'projects/:projectIdOrKey/groups';
    const POST_PROJECT_GROUPS                                     = 'projects/:projectIdOrKey/groups';
    const DELETE_PROJECT_GROUPS                                   = 'projects/:projectIdOrKey/groups';
    const GET_GROUPS_ICON                                         = 'groups/:groupId/icon';
    const GET_SPACE_LICENCE                                       = 'space/licence';

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var string 
     */
    protected $apiKey;

    /**
     * Clients accept an array of constructor parameters.
     *
     * @param string|null $apiKey
     * @param array|HttpClient $options
     */
    public function __construct($domain, $apiKey, $options = [])
    {
        $this->uri = "https://{$domain}/api/v2/";
        $this->apiKey = $apiKey;
        $this->httpClient = $options instanceof HttpClient ? $options : new HttpClient($this->httpOptionsDefaults($options));
    }

    /**
     * @param array $options
     * @return array
     */
    protected function httpOptionsDefaults(array $options)
    {
        return array_merge([
            'base_uri' => $this->uri,
            'headers' => [
                'User-Agent' => 'backlog-php',
                'Accept'     => 'application/json',
            ],
        ], $options);
    }

    /**
     * Request API endpoint
     *
     * @param string $method
     * @param string $endpoint
     * @param array  $params
     * @return Response
     * @throws BadRequestExceotion
     * @throws AuthorizedExceotion
     * @throws ChatworkException
     */
    public function request($method, $endpoint, array $params = [], $filePath = null)
    {
        $method = strtoupper($method);
        $endpoint = $this->buildEndpoint($endpoint, $params);
        $options = $this->requestOptions($method, $params, $filePath);

        try {
            $response = $this->httpClient->request($method, $endpoint, $options);
        } catch (ClientException $e) {
            if ($e->getCode() == 400) {
                throw new BadRequestExceotion($e);
            } elseif ($e->getCode() == 401) {
                throw new AuthorizedExceotion($e);
            }
            throw new BacklogException($e);
        }

        return new Response($response, [
            'method' => $method,
            'url' => $this->uri . $endpoint,
            'params' => $params,
            'apiKey' => $this->apiKey,
        ]);
    }

    /**
     * @param string $endpoint
     * @param array  $params
     * @return string
     */
    protected function buildEndpoint($endpoint, array &$params)
    {
        $endpoint = preg_replace('/^\//', '', $endpoint);

        preg_match_all('/:(.+)(?:$|\/)/', $endpoint, $matches);

        if (empty($matches[0])) {
            return $endpoint;
        }

        foreach ($matches[1] as $match) {
            if (isset($params[$match])) {
                $endpoint = preg_replace("/:$match(?:$|\/)/", $params[$match], $endpoint);
                unset($params[$match]);
            } else {
                throw new InvalidArgumentException();
            }
        }

        return $endpoint;
    }

    /**
     * @param string $method
     * @param array  $params
     * @return array
     */
    protected function requestOptions($method, array $params, $filePath)
    {
        $options = [
            'query' => [
                'apiKey' => $this->apiKey
            ]
        ];

        if ($method == 'GET') {
            $options['query'] += $params;
        } elseif (is_string($filePath) && is_readable($filePath)) {
            $options['multipart'] = [
                [
                    'name' => 'file',
                    'contents' => fopen($filePath, 'r'),
                    'filename' => $filePath,
                ]
            ];
        } else {
            $options['form_params'] = $params;
        }

        return $options;
    }

    /**
     * @param null|string $apiKey
     * @return string
     */
    public function apiKey($apiKey = null)
    {
        if (is_string($apiKey)) {
            $this->apiKey = $apiKey;
        }

        return $this->apiKey;
    }

    /**
     * @param null|HttpClient $httpClient
     * @return HttpClient
     */
    public function httpClient($httpClient = null)
    {
        if ($httpClient instanceof HttpClient) {
            $this->httpClient = $httpClient;
        }

        return $this->httpClient;
    }

    public function __call($name, $args)
    {
        $chars = preg_split('/([A-Z][a-z]*)/', $name, null, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);

        $constant = 'static::' . strtoupper(implode('_', $chars));

        if (!$constant || !defined($constant)) {
            throw new InvalidArgumentException('Class constant does not exist');
        }

        $endpoint = constant($constant);
        $params = isset($args[0]) ? $args[0] : [];
        $filePath = isset($args[1]) ? $args[1] : null;

        return $this->request($chars[0], $endpoint, $params, $filePath);
    }
}
