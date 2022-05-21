
<script>
  var custom_headers_string = window.sessionStorage.getItem('customHeaders');
  var user_profile_string = window.sessionStorage.getItem('loggedUserProfile');

  if (custom_headers_string != null && custom_headers_string != 'null') {
    if (user_profile_string != null && user_profile_string != 'null') {
      if ((new String(custom_headers_string)).length > 0 && (new String(user_profile_string)).length > 0) {
        var custom_headers = JSON.parse(custom_headers_string);
        var user_profile = JSON.parse(user_profile_string);

        window.Echo.connector.options.auth.headers = custom_headers;
        var logged_user_id = user_profile.id;
        window.PusherMessagingPrivateChannel = Echo.private(`channel-${logged_user_id}`);
      }
    }
  }
</script>
