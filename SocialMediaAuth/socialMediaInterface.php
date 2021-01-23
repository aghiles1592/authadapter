<?php

interface SocialMediaInterface {

public function authenticate($token);
public function formatData($data);

}