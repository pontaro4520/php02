<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>鋼材価格見積集積</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <!-- Main[Start] -->
    <form method="post" action="insert.php" id="priceData" onsubmit="return validateForm()">
        <div class="jumbotron">
            <fieldset>
                <legend>鋼材価格見積集積アプリ</legend>
                <label>見積取得日 <input type="date" name="date"></label><br>
                <label>鋼種：
                    <input type="radio" name="material" value="st">鉄
                    <input type="radio" name="material" value="sus">ステンレス
                    <input type="radio" name="material" value="al">アルミ</label><br>
                <label>材種：
                    <input type="radio" name="form" value="sheetMetal">板
                    <input type="radio" name="form" value="flatBar">フラットバー
                    <input type="radio" name="form" value="squarePipe">角パイプ
                    <input type="radio" name="form" value="roundPipe">丸パイプ
                    <input type="radio" name="form" value="others">その他</label><br>

                <label> 板厚：<input type="text" name="thickness"> t </label><br>
                <label> サイズ：<input type="text" name="size"></label><br>
                <label> 金額：<input type="text" name="price">円 </label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>

    <!-- Main[End] -->

        <!-- Foot[Start] -->
        <footer>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">集積結果一覧
                </a></div>
            </div>
        </nav>
    </footer>
    <!-- foot[End] -->


    <footer>
            <p>presented by 金子軽窓工業</p>
        </footer>


    <script>
        function validateForm() {
            let priceData = document.getElementById("priceData");
            let date = priceData.elements["date"].value;
            let material = priceData.elements["material"].value;
            let form = priceData.elements["form"].value;
            let thickness = priceData.elements["thickness"].value;
            let size = priceData.elements["size"].value;
            let price = priceData.elements["price"].value;

            if (date == "") {
                alert("見積取得日を入力してください");
                return false;
            }

            if (material == "") {
                alert("鋼種を選択してください");
                return false;
            }

            if (form == "") {
                alert("材種を選択してください");
                return false;
            }

            if (thickness == "") {
                alert("板厚を入力してください");
                return false;
            }

            if (size == "") {
                alert("サイズを入力してください");
                return false;
            }

            if (price == "") {
                alert("金額を入力してください");
                return false;
            }

            return true;
            }
        </script>


</body>

</html>
