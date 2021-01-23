class SocialMediaAuthApi {

private $auth;

public function __construct(SocialMediaAdapter $adapter){

    $this->auth = $adapter;
}

public function formatData($data){

    return $this->auth->formatData($data);
}

public function authenticate($data){

    return $this->auth->authenticate($data);
}