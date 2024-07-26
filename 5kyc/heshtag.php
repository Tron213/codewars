function generateHashtag($str) {
    
    $str = preg_replace('/\s+/', ' ', trim($str));

    if (strlen($str) == 0) {
        return false;
    }

    $words = explode(' ', $str);
    $hashtag = '#';

    foreach ($words as $word) {
        $hashtag .= ucfirst($word);
    }


    if (strlen($hashtag) > 140) {
        return false;
    }

    return $hashtag;
}
