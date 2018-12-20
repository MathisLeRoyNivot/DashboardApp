function myLogOut() {
  if (confirm("Voulez-vous vraiment vous déconnecter ?")) {
    window.open("login.html.twig");
  } else {
    txt = "You pressed Cancel!";
  }
}
