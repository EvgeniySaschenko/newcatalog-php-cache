// header-language-swich
(function() {
  document.addEventListener("click", (event)=>{
    let el = event.target;
    if (el.closest("[data-header-language-swich-item]")) {
      let lang = el.getAttribute("data-header-language-swich-item");
      document.cookie=`lang=${lang}`;
      let { pathname, search } = document.location;
      let pathParts = pathname.split("/");
      pathParts[1] = lang;
      document.location.href = `${pathParts.join("/")}${search}`;
    }
  });
})();

//  menu-main
(function() {
  let elementMenuMain = document.querySelector("[data-app-menu-main]");
  let elementBody = document.querySelector("body");

  document.addEventListener("click", (event)=>{
    let el = event.target;
    // show menu
    if (el.closest("[data-header-button-menu-main]")) {
      elementMenuMain.style.display = "block";
      elementBody.classList.add("body-scroll-lock");
    }
    // close
    if (el.closest("[data-app-menu-main-button-close]")) {
      elementMenuMain.style.display = "none";
      elementBody.classList.remove("body-scroll-lock");
    }
  });
})();

//  menu-main
(function() {
  let elementMenuMain = document.querySelector("[data-app-menu-main]");
  let elementBody = document.querySelector("body");

  document.addEventListener("click", (event)=>{
    let el = event.target;
    // show menu
    if (el.closest("[data-header-button-menu-main]")) {
      elementMenuMain.style.display = "block";
      elementBody.classList.add("body-scroll-lock");
    }
    // close
    if (el.closest("[data-app-menu-main-button-close]")) {
      elementMenuMain.style.display = "none";
      elementBody.classList.remove("body-scroll-lock");
    }
  });
})();

// language-swich
(function() {
  let elementLanguageSwichBox = document.querySelector("[data-app-language-swich-box]");
  let isShow = false;
  document.addEventListener("click", (event)=>{
    let el = event.target;
    // toggle
    if (el.closest("[data-app-language-swich-current]")) {
      elementLanguageSwichBox.style.display = isShow ? "none" : "block";
      isShow = !isShow;
    }

    if (!el.closest("[data-app-language-swich]")) {
      elementLanguageSwichBox.style.display = "none";
      isShow = false;
    }
  });
})();
