function toggle_light() {
    var l = document.body.className;
    document.body.className = "is-dark" == l ? "is-light" : "is-dark";
	l = document.body.className;
	update_cookie();
}

function update_cookie() {
	// Delete pre-existing cookie
	document.cookie="theme=;path='/';SameSite=Lax;expires="+(new Date(0)).toUTCString();

	// Set new cookie
	document.cookie="theme="+document.body.className.replace("is-","")+";path='/';SameSite=Lax";
}

function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for (let i = 0; i <ca.length; i++) {
		let c = ca[i];

		while (c.charAt(0) == ' ')
			c = c.substring(1);

		if (c.indexOf(name) == 0)
			return c.substring(name.length, c.length);
	}
	return "";
}

function remember_prefs() {
	// Get browser light setting
	let dm_user = window.matchMedia("(prefers-color-scheme:dark)").matches;

	// Check cookie state, if set
	if (document.cookie != "")
		document.body.className = "is-" + getCookie("theme");
	else
		// Change accordingly
		document.body.className = dm_user == true ? "is-dark" : "is-light";
}