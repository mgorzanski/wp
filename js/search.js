function showSearch() {
    if($('.search-form').css("display") == "block")
    {
        $('.search-form').delay(100).fadeOut();
    }
    else
    {
        $('.search-form').delay(100).fadeIn();
    }
}