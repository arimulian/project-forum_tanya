<!DOCTYPE html>
<html>
<head>
  <title>Profile Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    #profile {
  display: flex;
  align-items: center;
}

#avatar {
  flex: 0 0 120px;
  margin-right: 20px;
}

#avatar img {
  width: 100%;
  border-radius: 50%;
}

#user-info {
  flex: 1;
}

#edit-button {
  background-color: blue;
  color: white;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
}

#edit-button:hover {
  background-color: darkblue;
}

  </style>
</head>
<body>
  <div id="profile">
    <div id="avatar">
      <img src="avatar.jpg" alt="Profile Picture">
    </div>
    <div id="user-info">
      <h1 id="name">John Doe</h1>
      <p id="bio">A short bio about the user goes here.</p>
      <button id="edit-button">Edit Profile</button>
    </div>
  </div>
  <script >
    const editButton = document.getElementById('edit-button');

editButton.addEventListener('click', () => {
  // show an edit form or modal when the button is clicked
});

  </script>
</body>
</html>
