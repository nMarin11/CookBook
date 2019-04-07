<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/cookSpoon.png" type="image/x-icon">
	<title>Profile Page</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body class="bodyclass">
	<header id="header1">
			<a href="dashboard.php"><img src="images/cookbook_logo_white.png" alt="cookBook logo image" class="logo"></a>
			<div class="userset">
				<a href='profile.php?username={$usernameLog}'>
				{if !empty ($userimg)}
				<img src="userimg/{$userimg}"></a>
				{else}
				<img src="images/user1.jpg"></a>
				{/if}
				<p class="imekorisnika">{$fullNameLog}</p>
				</a>
				<a href="logout.php"><input type="submit" name="logout" value="logout"></a>
			</div>
	</header>
	<div class="loggedHead">
		{if !empty ($userimg)}
				<img src="userimg/{$userimg}"></a>
				{else}
				<img src="images/user1.jpg"></a>
				{/if}
		<h1 id="userHeading">{$fullName}</h1>
		{if $username == $usernameLog}
		<a class="editProfile" href='editProfile.php?username={$usernameLog}'>Edit profile</a>
		{/if}
	</div>
	
	<main id="main2">
		{section name=i loop=$userData}
		<div class='userpost'>
				<p class="content">{$userData[i].body}</p>
				<p>{$userData[i].date}</p>
				{if !empty($userData[i].images)}
			<img src="uploaded/{$userData[i].images}" alt="post slika" />
			{/if}
			{if $username == $usernameLog}
			<div class="edContainer">
				<a class='delete' href="deletePost.php?username={$username}&id={$userData[i].id}" onclick="return confirm('Potvrdite brisanje posta')"><i class="fas fa-trash-alt"></i></a>
				<a class="edit" href='editPost.php?postText={$userData[i].body}&userId={$userData[i].userId}&postId={$userData[i].id}'>Edit post</a>
			</div>
			{/if}
			</div>
		{/section}
	</main>
    <!--java script code for preventing resubmission when refreshing the page-->
        <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
        </script>
</body>
</html>