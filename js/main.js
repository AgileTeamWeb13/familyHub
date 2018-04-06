function hubPage (hubId, hubName) {
	console.log(hubId);
	console.log(hubName);

	cookieName = "id";
	cookieValue = hubId;

	// document.cookie = '"hubid="' + '; path=/;';
	document.cookie = cookieName + "=" + cookieValue + "; path=/;";

	// console.log(document.cookie);
	window.location.href = 'hub.php';
}

