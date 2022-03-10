$(document).ready(function () {
  //elle met lid selectionné en transparent
  function Hide_Load() {
    $("#loading").fadeOut("slow");
  }
  //La page à afficher par défault au début
  $("#pagination li:first").css({ color: "#FF0084" }).css({ border: "none" });
  $("#content").load("pagination_data.php?page=1", Hide_Load());
  //Si on clicque sur un bouton de la liste des pages,
  $("#pagination li").click(function () {
    //On le donne un peu de css
    $("#pagination li")
      .css({ border: "solid #dddddd 1px" })
      .css({ color: "#0063DC" });
    $(this).css({ color: "#FF0084" }).css({ border: "none" });
    //On récupere le id du bouton , c'est à dire le numéro de la page
    var pageNum = this.id;
    //On fait appel à la requete de récupération de la data qui corresponde
    // à cette page enn lui passant le num de la page en params
    $("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
  });
});
