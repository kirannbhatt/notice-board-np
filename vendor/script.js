function openTab(evt, tabName) {
  var i, tabContent, tabLinks;
  tabContent = document.getElementById('tabcontent');
  for(i=0; i<tabContent.length; i++) {
    tabContent[i].style.display="none";
  }
  tabLinks = document.getElementsByClassName('tablinks');
  for(i=0; i < tabLinks.length; i++) {
    tabLinks[i].className = tabLinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}