window.onload = () => {
  const count = document.querySelector("#count_page");
  const sort = document.querySelector("#select_sort");
  const catalog = document.querySelector('.catalog__goods-wrapper');
  const section_id = document.querySelector(".goods").dataset.section_id;
  const get = {};


  count.addEventListener('click', (e) => {

    get["page"] = count.value;
    ajax(get)

  })
  sort.addEventListener('click', (e) => {
    get["sort"] = sort.value;
    ajax(get)
  })

  function ajax(data) {
    get["section_id"] = section_id;
    get["ajax_mode"] = "y";
    BX.ajax.get(
      window.location.origin + '/catalog/index.php',
      // window.location.origin + '/local/templates/lassie/components/bitrix/catalog/main_catalog/sections.php',

      data,
      function (data) {
        catalog.innerHTML = data

      });
  }
}