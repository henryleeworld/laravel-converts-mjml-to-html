# Laravel 11 將 MJML 轉換成 HTML

引入 spatie 的 mjml-php 套件來擴增將 MJML 轉換成 HTML，MJML 是一套由電子報服務商 MailJet 貢獻出來的開源框架，能用簡單的語法輕鬆撰寫回應式設計（RWD）的電子郵件內容。

## 使用方式
> 以下兩步驟擇一，需要 Node.js 版本 16.x 或更高版本。
- （前提：如果伺服器安裝 npm 套件管理工具）執行 __npm__ 指令的 __install__ 來執行 MJML 安裝。
```sh
$ npm install mjml
```
- （前提：如果伺服器安裝 Yarn 套件管理工具）執行 __yarn__ 指令的 __add__ 來執行 MJML 安裝。
```sh
$ yarn add mjml
```
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __storage:link__ 來建立連結符號，讓公用可存取的檔案維持在一個目錄中。
```sh
$ php artisan storage:link
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/mail/html` 來進行電子郵件內容瀏覽。

----

## 畫面截圖
![](https://i.imgur.com/67cSbtx.png)
> 必須同時考慮各種郵件軟體（如 Microsoft Outlook）、及各家線上郵件平台（如 Google Gmail、Yahoo 奇摩電子信箱）的呈現，加上郵件平台及軟體對 CSS 的支援性較差、又或者會強制剝除我們的 CSS 設定，因此在回應式的電子郵件在設計上往往限制更多
