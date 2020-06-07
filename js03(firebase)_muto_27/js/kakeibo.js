// ここから下にjqueryの処理を書いて練習します
// ---------------------月の選択---------------------

// ---------------------日付の入力---------------------
function selectBox(start, end) {
  let str = "";
  for (let i = start; i < end; i++) {
    str += `<option>${i}</option>`;
  }
  return str;
}
const year = selectBox(2020, 3000);
const month = selectBox(1, 13);
const day = selectBox(1, 32);
$("#year").html(year);
$("#year_").html(year);
$("#month").html(month);
$("#month_").html(month);
$("#day").html(day);

// ---------------------入力ボタンがクリックされたら次の処理をする---------------------
$(".btn").on("click", function () {
  // 勘定科目を選択した時の処理
  const val = $("#kanjo").val();
  // 月を選択した時の処理
  const year_month = $("#year").val() + "年" + $("#month").val() + "月";
  // 条件分岐
  if (val == "前月繰越" || val == "給与" || val == "賞与" || val == "雑益") {
    //データを登録で送る
    firebase
      .database()
      .ref(year_month)
      .push({
        year: $("#year").val(),
        month: $("#month").val(),
        day: $("#day").val(),
        kanjo: val,
        utiwake: $("#utiwake").val(),
        shishutsu: $("#null").val(), //給与・賞与・雑益を選んだらshishutsuにnullを代入
        shueki: $("#kingaku").val(),
      });
    // 文字を空にする
    $("#utiwake").val("");
    $("#kingaku").val("");
  } else {
    //データを登録で送る
    firebase
      .database()
      .ref(year_month)
      .push({
        year: $("#year").val(),
        month: $("#month").val(),
        day: $("#day").val(),
        kanjo: val,
        utiwake: $("#utiwake").val(),
        shishutsu: $("#kingaku").val(),
        shueki: $("#null").val(), //給与・賞与・雑益以外を選んだらshuekiにnullを代入
      });
    // 文字を空にする
    $("#utiwake").val("");
    $("#kingaku").val("");
  }
});

//---------------------受信処理---------------------
$(".btn_b").on("click", function () {
  const nengetsu = $("#year_").val() + "年" + $("#month_").val() + "月";
  console.log(nengetsu);

  firebase
    .database()
    .ref(nengetsu)
    .on("child_added", function (data) {
      let v = data.val();
      const k = data.key;
      console.log(v);
      console.log(k);

      // HTMLに埋め込み
      const str = `<tr id="${k}"><td>${v.year}/${v.month}/${v.day}</td><td>${v.kanjo}</td><td>${v.utiwake}</td><td class="shunyu">${v.shueki}</td><td class="hiyo">${v.shishutsu}</td><td class="sakujobtn"><button class="btn_c">削除</button></td></tr>`;
      $("#output").append(str);

      // // データを削除する
      $(document).on("click", ".sakujobtn", (event) => {
        const id = $(event.currentTarget).closest("tr").attr("id");
        console.log(nengetsu + "/" + id);
        console.log(nengetsu);
        firebase
          .database()
          .ref(nengetsu + "/" + id)
          .remove();
      });
    });
});
//---------------------合計の計算---------------------
$(".btn,.btn_a").on("click", function (keisan) {
  const karanoshueki = []; //空の配列　収益
  const karanohiyo = []; //空の配列　費用
  const tbl = document.getElementById("output");
  const r = tbl.rows.length; //行数

  for (let i = 1; i < r; i++) {
    console.log(i);
    const ataiA = tbl.rows[i].cells[3].innerHTML; //収益のセル
    const ataiB = tbl.rows[i].cells[4].innerHTML; //費用のセル

    numA = parseInt(ataiA); //取り出した収益の値を数値に変える
    karanoshueki.push(numA); //空の配列に追加

    numB = parseInt(ataiB); //取り出した費用の値を数値に変える
    karanohiyo.push(numB); //空の配列に追加
  }

  const total = karanoshueki.reduce(function (p, x) {
    return p + ((x || 0) - 0);
  }, 0); //収益の配列内を合計

  const totalB = karanohiyo.reduce(function (p, x) {
    return p + ((x || 0) - 0);
  }, 0); //費用の配列内を合計

  const rieki = total - totalB; //収益―費用

  // 計算結果をHTMLに埋め込み
  $(".total").html(total);
  $(".totalB").html(totalB);
  $(".riekiA").html(rieki);
});
