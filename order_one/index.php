<?php

session_start();

require_once 'source/configs/bd.php';
require_once 'source/connect.php';

?>

  <html lang="en">

  <head>
    <script type="module">
      import RefreshRuntime from "/@react-refresh" RefreshRuntime.injectIntoGlobalHook(window) window.$RefreshReg$ = () => {} window.$RefreshSig$ = () => (type) => type window.__vite_plugin_react_preamble_installed__ = true
    </script>

    <script type="module" src="/@vite/client"></script>

    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">


    <title></title>
    <style type="text/css" data-vite-dev-id="D:/order_hs/BookWebsiteDevelopment-front/src/components/Header/Header.scss">
    </style>
  </head>

  <body>
    <div id="root">
      <div>
        <header class="header _container">
          <section class="header__wrapper">
            <section class="header__left">
              <div class="logotype">
                <svg class="SvgIcon_root__n_a0S" focusable="false" viewBox="0 0 496 512" aria-hidden="true">
                  <path fill="currentColor" d="M248 8C111.03 8 0 119.03 0 256s111.03 248 248 248 248-111.03 248-248S384.97 8 248 8zm0 376c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm0-128c-53.02 0-96 42.98-96 96s42.98 96 96 96c-106.04 0-192-85.96-192-192S141.96 64 248 64c53.02 0 96 42.98 96 96s-42.98 96-96 96zm0-128c-17.67 0-32 14.33-32 32s14.33 32 32 32 32-14.33 32-32-14.33-32-32-32z"></path>
                </svg>
              </div>
              <nav class="header__nav nav">
                <ul class="nav__list">
                  <li class="nav__item">Каталог</li>
                  <li class="nav__item">Топы</li>
                  <li class="nav__item">Форум</li>
                  <li class="nav__item">
                    <svg viewBox="0 0 50 50" width="11px" height="11px">
                      <path d="M21,3C11.6,3,4,10.6,4,20s7.6,17,17,17s17-7.6,17-17S30.4,3,21,3z M21,33c-7.2,0-13-5.8-13-13c0-7.2,5.8-13,13-13c7.2,0,13,5.8,13,13C34,27.2,28.2,33,21,33z"></path>
                      <line fill="none" stroke="#000000" stroke-width="6" stroke-miterlimit="10" x1="31.2" y1="31.2" x2="44.5" y2="44.5"></line>
                    </svg>Поиск</li>
                </ul>
              </nav>
            </section>
            <section class="header__right"><a class="header__marks" href="#">Закладки</a>
              <div class="header__themes themes">
                <div class="themes__indicator"></div>
                <div class="themes__icon-container">
                <button id="themeToggle">
                    Click
                </button>

                </div>
                <script type="text/javascript">
              document.getElementById('themeToggle').addEventListener('click', function() {
    const currentTheme = document.body.className;
    if (currentTheme === 'light-theme') {
        document.body.className = 'dark-theme';
    } else {
        document.body.className = 'light-theme';
    }
});
                </script>
                <style type="text/css">
                    
                </style>
              </div>
              <div class="header__settings">
                <svg class="SvgIcon_root__n_a0S" focusable="false" viewBox="0 0 24 24" aria-hidden="true" aria-label="Preferences">
                  <path d="M19.14 12.94c.04-.3.06-.61.06-.94 0-.32-.02-.64-.07-.94l2.03-1.58c.18-.14.23-.41.12-.61l-1.92-3.32c-.12-.22-.37-.29-.59-.22l-2.39.96c-.5-.38-1.03-.7-1.62-.94l-.36-2.54c-.04-.24-.24-.41-.48-.41h-3.84c-.24 0-.43.17-.47.41l-.36 2.54c-.59.24-1.13.57-1.62.94l-2.39-.96c-.22-.08-.47 0-.59.22L2.74 8.87c-.12.21-.08.47.12.61l2.03 1.58c-.05.3-.09.63-.09.94s.02.64.07.94l-2.03 1.58c-.18.14-.23.41-.12.61l1.92 3.32c.12.22.37.29.59.22l2.39-.96c.5.38 1.03.7 1.62.94l.36 2.54c.05.24.24.41.48.41h3.84c.24 0 .44-.17.47-.41l.36-2.54c.59-.24 1.13-.56 1.62-.94l2.39.96c.22.08.47 0 .59-.22l1.92-3.32c.12-.22.07-.47-.12-.61l-2.01-1.58zM12 15.6c-1.98 0-3.6-1.62-3.6-3.6s1.62-3.6 3.6-3.6 3.6 1.62 3.6 3.6-1.62 3.6-3.6 3.6z"></path>
                </svg>
              </div>
              <button class="header__blue-button">Войти</button>
            </section>
          </section>
        </header>
        <section>
          <div>
            <div class="_home_giqam_1">
              <section class="card-inner">
                <section class="card-inner__wrapper _container">
                  <div class="stiky">
                    <aside class="card-inner__aside">
                      <div class="card-inner__aside-preview"><img src="img/main_avatar.jpg" alt="##preview"></div>
                      <button class="action__blue-button-big">Читать</button>
                      <button class="action__blue-button-big">Добавить в закладки</button>
                      <button class="action__report-button">
                        <svg class="SvgIcon_root__n_a0S SvgIcon_fontSize-small__fjOf4 mr-2" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                          <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM12 17.3c-.72 0-1.3-.58-1.3-1.3 0-.72.58-1.3 1.3-1.3.72 0 1.3.58 1.3 1.3 0 .72-.58 1.3-1.3 1.3zm1-4.3h-2V7h2v6z"></path>
                        </svg><span>Пожаловаться</span></button>
                    </aside>
                  </div>
                  <header class="card-inner__header">
                    <div>
                      <div class="card-inner__header-top">
                        <p class="card-inner__header-top-p">Манга 2024</p>
                        <h1 class="card-inner__header-top-h1">Моя перевёрнутая жизнь в качестве моба</h1></div>
                      <div class="card-inner__header-bottom">
                        <div class="card-inner__header-bottom-left">
                          <table>
                            <tbody>
                              <tr>
                                <td>Глав</td>
                                <td>Лайков</td>
                                <td>В закладках</td>
                                <td>Просмотров</td>
                                <td>Выпуск</td>
                                <td>Перевод</td>
                                <td>PG</td>
                              </tr>
                              <tr>
                                <td>10</td>
                                <td class="icon-and-text-black">
                                  <svg class="SvgIcon_root__n_a0S SvgIcon_fontSize-small__fjOf4" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path>
                                  </svg><span>13.4K</span></td>
                                <td class="icon-and-text-black">
                                  <svg class="SvgIcon_root__n_a0S SvgIcon_fontSize-small__fjOf4" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M19 18l2 1V3c0-1.1-.9-2-2-2H8.99C7.89 1 7 1.9 7 3h10c1.1 0 2 .9 2 2v13zM15 5H5c-1.1 0-2 .9-2 2v16l7-3 7 3V7c0-1.1-.9-2-2-2z"></path>
                                  </svg><span>7.3K</span></td>
                                <td class="icon-and-text-black">
                                  <svg class="SvgIcon_root__n_a0S SvgIcon_fontSize-small__fjOf4" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"></path>
                                  </svg><span>67.3K</span></td>
                                <td>Продолжается</td>
                                <td>Продолжается</td>
                                <td>16+</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <div class="card-inner__header-bottom-right">
                          <div class="card-inner__header-bottom-right-flex">
                            <p class="icon-and-text">
                              <svg class="SvgIcon_root__n_a0S SvgIcon_color-warning__tVs_m SvgIcon_fontSize-medium__NwgG6" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"></path>
                              </svg><span>9.3</span></p>
                            <button class="action__blure-btn">Оценить</button>
                          </div>
                          <p class="card-inner__header-bottom-right-p2">201</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-category">
                      <div>
                        <ul class="card-category_descr">
                          <li>Описание</li>
                          <li>Читать</li>
                        </ul>
                        <div>
                          <div class="_description_1uc2q_1"><span>Ха Чжун Ли обычный курьер, еле сводящий концы с концами. Однажды заказ привёл его на Олимп к богам, и его жизнь приняла неожиданный поворот. Теперь он – курьер богов и гребёт деньги лопатой за каждый рискованный заказ и улучшает свою экипировку. Его ждут опасные приключения в подземельях, кишащих монстрами. Ха Чжун с помощью находчивости и хитрости выходит из любой трудной ситуации. Сможет ли он остаться обычным курьером и доставщиком богов одновременно?</span>
                            <div class="_categories_1uc2q_10"><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a><a class="_categoty_1uc2q_16" href="/">Категория</a></div>
                            <div class="_autor_1uc2q_28"><span>Авторы</span>
                              <div class="_autors_1uc2q_35">
                                <div class="_ststus_1uc2q_41"><img src="img/main_avatar.jpg" alt="" height="35" width="35">
                                  <ul>
                                    <li>Автор</li>
                                    <li>Статус ахах стстус бля</li>
                                  </ul>
                                </div>
                                <div class="_ststus_1uc2q_41"><img src="img/main_avatar.jpg" alt="" height="35" width="35">
                                  <ul>
                                    <li>Автор</li>
                                    <li>Статус ахах стстус бля</li>
                                  </ul>
                                </div>
                                <div class="_ststus_1uc2q_41"><img src="img/main_avatar.jpg" alt="" height="35" width="35">
                                  <ul>
                                    <li>Автор</li>
                                    <li>Статус ахах стстус бля</li>
                                  </ul>
                                </div>
                                <div class="_ststus_1uc2q_41"><img src="img/main_avatar.jpg" alt="" height="35" width="35">
                                  <ul>
                                    <li>Автор</li>
                                    <li>Статус ахах стстус бля</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="_comment_page_etx71_1">
                              <div class="_comments_etx71_1"><span>Комментарии</span>
                                <form>
                                  <input type="text" placeholder="Оставить комментарий">
                                  <button>
                                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" t="1569683742680" viewBox="0 0 1024 1024" version="1.1" height="30" width="30" xmlns="http://www.w3.org/2000/svg" style="color: rgb(50, 69, 128); background-color: white;">
                                      <defs></defs>
                                      <path d="M931.4 498.9L94.9 79.5c-3.4-1.7-7.3-2.1-11-1.2-8.5 2.1-13.8 10.7-11.7 19.3l86.2 352.2c1.3 5.3 5.2 9.6 10.4 11.3l147.7 50.7-147.6 50.7c-5.2 1.8-9.1 6-10.3 11.3L72.2 926.5c-0.9 3.7-0.5 7.6 1.2 10.9 3.9 7.9 13.5 11.1 21.5 7.2l836.5-417c3.1-1.5 5.6-4.1 7.2-7.1 3.9-8 0.7-17.6-7.2-21.6zM170.8 826.3l50.3-205.6 295.2-101.3c2.3-0.8 4.2-2.6 5-5 1.4-4.2-0.8-8.7-5-10.2L221.1 403 171 198.2l628 314.9-628.2 313.2z"></path>
                                    </svg>
                                  </button>
                                </form>
                              </div>
                              <div class="_comment_etx71_1">
                                <div>
                                  <a href="/"><img src="img/commencto_avataro.jpg" alt="" height="50" width="50"></a>
                                </div>
                                <div class="_user_descr_etx71_36">
                                  <div class="_user_comment_etx71_39">
                                    <div class="_user_comment_inner_etx71_46">
                                      <div><span>Негро</span></div>
                                      <button>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                          <path fill="none" d="M0 0h24v24H0V0z"></path>
                                          <path d="M15.73 3H8.27L3 8.27v7.46L8.27 21h7.46L21 15.73V8.27L15.73 3zM19 14.9 14.9 19H9.1L5 14.9V9.1L9.1 5h5.8L19 9.1v5.8z"></path>
                                          <circle cx="12" cy="16" r="1"></circle>
                                          <path d="M11 7h2v7h-2z"></path>
                                        </svg>
                                      </button>
                                    </div>
                                    <div>Прикольно для дрочки по самые почки</div>
                                  </div>
                                  <div class="_grade_etx71_53">
                                    <ul>
                                      <li>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M885.9 533.7c16.8-22.2 26.1-49.4 26.1-77.7 0-44.9-25.1-87.4-65.5-111.1a67.67 67.67 0 0 0-34.3-9.3H572.4l6-122.9c1.4-29.7-9.1-57.9-29.5-79.4A106.62 106.62 0 0 0 471 99.9c-52 0-98 35-111.8 85.1l-85.9 311h-.3v428h472.3c9.2 0 18.2-1.8 26.5-5.4 47.6-20.3 78.3-66.8 78.3-118.4 0-12.6-1.8-25-5.4-37 16.8-22.2 26.1-49.4 26.1-77.7 0-12.6-1.8-25-5.4-37 16.8-22.2 26.1-49.4 26.1-77.7-.2-12.6-2-25.1-5.6-37.1zM112 528v364c0 17.7 14.3 32 32 32h65V496h-65c-17.7 0-32 14.3-32 32z"></path>
                                        </svg><span>123</span></li>
                                      <li>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M885.9 490.3c3.6-12 5.4-24.4 5.4-37 0-28.3-9.3-55.5-26.1-77.7 3.6-12 5.4-24.4 5.4-37 0-28.3-9.3-55.5-26.1-77.7 3.6-12 5.4-24.4 5.4-37 0-51.6-30.7-98.1-78.3-118.4a66.1 66.1 0 0 0-26.5-5.4H273v428h.3l85.8 310.8C372.9 889 418.9 924 470.9 924c29.7 0 57.4-11.8 77.9-33.4 20.5-21.5 31-49.7 29.5-79.4l-6-122.9h239.9c12.1 0 23.9-3.2 34.3-9.3 40.4-23.5 65.5-66.1 65.5-111 0-28.3-9.3-55.5-26.1-77.7zM112 132v364c0 17.7 14.3 32 32 32h65V100h-65c-17.7 0-32 14.3-32 32z"></path>
                                        </svg>
                                      </li>
                                      <li>
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M19 7a1 1 0 0 0-1-1h-8v2h7v5h-3l3.969 5L22 13h-3V7zM5 17a1 1 0 0 0 1 1h8v-2H7v-5h3L6 6l-4 5h3v6z"></path>
                                        </svg>
                                      </li>
                                    </ul>
                                    <div>4 месяца назад</div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="_left_e2l4i_1">
                        <div class="_routs_e2l4i_4"><span>Похожее</span>
                          <button>Добавить</button>
                        </div>
                        <div>
                          <div class="_similiar_e2l4i_8"><img src="img/main_avatar.jpg" alt="omg_name" height="105" width="70">
                            <ul>
                              <li>Моя перевёрнутая жизнь в качестве моба</li>
                              <li>Похож по сюжету</li>
                              <li>
                                <input type="radio" name="like">
                                <div>12312</div>
                                <input type="radio" name="like">
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class="_similiar_e2l4i_8"><img src="img/main_avatar.jpg" alt="omg_name" height="105" width="70">
                            <ul>
                              <li>Моя перевёрнутая жизнь в качестве моба</li>
                              <li>Похож по сюжету</li>
                              <li>
                                <input type="radio" name="like">
                                <div>12312</div>
                                <input type="radio" name="like">
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class="_similiar_e2l4i_8"><img src="img/main_avatar.jpg" alt="omg_name" height="105" width="70">
                            <ul>
                              <li>Моя перевёрнутая жизнь в качестве моба</li>
                              <li>Похож по сюжету</li>
                              <li>
                                <input type="radio" name="like">
                                <div>12312</div>
                                <input type="radio" name="like">
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class="_similiar_e2l4i_8"><img src="img/main_avatar.jpg" alt="omg_name" height="105" width="70">
                            <ul>
                              <li>Моя перевёрнутая жизнь в качестве моба</li>
                              <li>Похож по сюжету</li>
                              <li>
                                <input type="radio" name="like">
                                <div>12312</div>
                                <input type="radio" name="like">
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div>
                          <div class="_similiar_e2l4i_8"><img src="img/main_avatar.jpg" alt="omg_name" height="105" width="70">
                            <ul>
                              <li>Моя перевёрнутая жизнь в качестве моба</li>
                              <li>Похож по сюжету</li>
                              <li>
                                <input type="radio" name="like">
                                <div>12312</div>
                                <input type="radio" name="like">
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </header>
                </section>
              </section>
            </div>
          </div>
        </section>
      </div>
    </div>
    <script type="module" src="./src/main.jsx"></script>

  </body>

  </html>