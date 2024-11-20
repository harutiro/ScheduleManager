#import "./template.typ": report, code-info
#show: report.with(
  title: [
    #text(font: "Noto Emoji")[#emoji.crab] \
    Webプログラミング及び演習
  ],
  author: [
    情報科学部 情報科学科 コンピュータシステム専攻 \
    K22120 牧野遥斗
  ]
)
#set text(font: "Hiragino Mincho ProN")


//--------------------
//       目次
//--------------------
#show outline.entry.where(
  level: 1
): it => {
  v(14pt, weak: true)
  strong(it)
}

#outline(
    title: "目次",
    depth: 3,
    indent: 2em
)

#pagebreak()


= 設計のコンセプト



#pagebreak()
= 目標

#pagebreak()
= データベースのテーブルとリレーション

#pagebreak()
= 画面の状態遷移

#pagebreak()
= 達成度

#pagebreak()
= 反省点

#pagebreak()



