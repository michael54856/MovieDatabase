# 電影檢索系統

## 簡介
建立一個可以查詢電影相關資料的網站，可由國家、導演、工作室、獎項、演員、評分……去搜尋出各個電影的資訊，除此之外還能夠進行新增及刪除，並透過圖形化的介面讓使用者更方便管理系統。
<br>
我們還有製作登入系統，只有root能夠新增與刪除資料，一般使用者則無
<br>

這個系統可以根據 :
1. 電影
2. 演員
3. 導演
4. 工作室
5. 評論
6. Casting
7. 獎項
來進行查詢、新增及刪除

![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/FrontPage.png)

## Schema
![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/schema.png)


## 查詢範例_1:
尋找Marvel工作室所拍攝，USA所發行，在2010年後上映，不超過150分鐘，平均評分在5~8之間的電影
![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/query1.png)
## 查詢範例_2:
尋找John Moore所執導的電影，而且要是動作片，而且需要17歲以上才能觀看，並且需要獲得Good Sound這個獎項的電影 
![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/query2.png)

## 查詢範例_3:
我想查詢有哪個導演是Marvel工作室的，而且性別是男性，而且還有執導過蜘蛛人的相關電影(輸入spider去找關聯)，最終會輸出有哪些導演，並且提供其性別、工作室與所以執導過的電影
![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/query3.png)

## 新增電影範例:
![](https://github.com/michael54856/MovieDatabase/blob/main/ReadmeImage/insert.png)


其他詳細說明可以查看description.docx