window.onload = () => {
  const count = document.querySelector("#count_page-styler");
  const sort = document.querySelector("#select_sort-styler");
  const catalog = document.querySelector('.catalog__goods-wrapper');
  const section_id = document.querySelector(".goods").dataset.section_id;
  const loadItem = document.querySelector('.catalog__more-btn')
  const get = {};


  count.addEventListener('click', (e) => {

    if (e.target.classList.contains("selected")) {
      get["load_item"] = '';
      get["page"] = +e.target.innerHTML;
      ajax(get)
    }


  })
  sort.addEventListener('click', (e) => {
    if (e.target.classList.contains("selected")) {
      get["sortBy"] = e.target.innerHTML;
      ajax(get)
    }
  })

  if (loadItem !== null) {
    loadItem.addEventListener('click', (e) => {
      get["load_item"] = "2";
      if (isNaN(get["page"])) {
        get["page"] = 12;
      }
      get["page"] = +get["page"] + 12
      ajax(get)
    })
  }


  function ajax(data) {
    get["section_id"] = section_id;
    get["ajax_mode"] = "y";
    BX.ajax.get(
      window.location.origin + '/catalog/index.php',
      data,
      function (data) {
        catalog.innerHTML = data
      });
  }
}
