<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Potta+One&family=Rock+Salt&display=swap" rel="stylesheet">
  <!-- アイコン -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <!-- cssシート -->
  <link href="{{ secure_asset('css/profile.css') }}" rel="stylesheet">
  <!-- サイトのタイトル -->
  <title>Sho Momma's Portfolio</title>
</head>
<body>
  <!-- ヘッダー -->
  <header>
    <div class="header_left">
      <h1>Profile</h1>
    </div>
    <div class="header_right">
      <nav class="header_nav">
        <ul class="header_ul">
          <li class="header_li"><a href="#">Top</a> </li>
          <li class="header_li"><a href="#About">About</a></li>
          <li class="header_li"><a href="#Achieve">Achievement</a></li>
          <li class="header_li"><a href="#Contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- アバウト -->
  <div class="about">
    <div class="about_title">
      <h1><a name="About">About</a></h1>
    </div>
    <div class="about_main">
      <div class="about_img">
        <img src="{{asset('/images/about-photo.JPG')}}" alt="about写真">
      </div>
      <div class="about_content">
        <table class="content_table">
          <tr class="content_tr">
            <td class="content_td">Name</td>
            <td class="content_td">門馬 翔</td>
          </tr>
          <tr class="content_tr">
            <td class="content_td">Birth</td>
            <td class="content_td">1994/08/19</td>
          </tr>
          <tr class="content_tr">
            <td class="content_td">Birthplace</td>
            <td class="content_td">宮城県</td>
          </tr>
          <tr class="content_tr">
            <td class="content_td">SNS</td>
            <td class="content_td"><a href="https://twitter.com/sh0oo_mm"><span class="fa fa-twitter"></span></a>
            <a href="www.linkedin.com/in/sh0oomm"><span class="fa fa-linkedin"></span></a>
            </td>
          </tr>
          <tr class="content_tr">
            <td class="content_td">Skill</td>
            <td class="content_td">
              リクルーティング（エンジニア職/ビジネス職）<br>
              採用戦略 企画/立案<br>
              採用イベント 企画設計/実施<br>
              部署立ち上げ経験あり<br>
              法人営業経験あり<br>
              Webアプリ開発（言語：HTML/JavaScript/Laravel）<br>
            </td>
          </tr>
          <tr class="content_tr">
            <td class="content_td">Career</td>
            <td class="content_td">
              2017 dipへビジネス職として入社<br>
              2018 人材開発室（東京）へ異動<br>
              2019 同部署大阪支部の立ち上げに携わる<br>
              2020 PLとしてリファラル採用/海外学生採用に携わる<br>
              2021 PLとしてエンジニア採用/海外学生採用に携わる<br>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<!-- 実績・成果物 -->
<div class="achieve">
  <div class="achieve_title">
    <h1><a name="Achieve">Achievement</a></h1>
  </div>
  <div class="achieve_main1">
    <div class="achieve_pic">
      <img src="{{asset('/images/achieve1.png')}}" alt="achieve_pic">
    </div>
    <div class="achieve_content">
      <div class="achieve_content_title">
        <h3>企業名</h3>
      </div>
      <div class="achieve_content_point">
        <p>作成におけるポイント記載</p>
      </div>
    </div>
  </div>
  <div class="achieve_main2">
    <div class="achieve_pic">
      <img src="{{asset('/images/achieve2.png')}}" alt="achieve_pic">
    </div>
    <div class="achieve_content">
      <div class="achieve_content_title">
        <h3>企業名</h3>
      </div>
      <div class="achieve_content_point">
        <p>作成におけるポイント記載</p>
      </div>
    </div>
  </div>
  <div class="achieve_main3">
    <div class="achieve_pic">
      <img src="{{asset('/images/achieve3.png')}}" alt="achieve_pic">
    </div>
    <div class="achieve_content">
      <div class="achieve_content_title">
        <h3>企業名</h3>
      </div>
      <div class="achieve_content_point">
        <p>作成におけるポイント記載</p>
      </div>
    </div>
  </div>
</div>
<div class="contact">
  <div class="contact_title">
    <h1><a name="Contact">Contact Form</h1>
  </div>
  <form method="post" action="/thanks">
    @csrf
    <table class="contact_table">
      <tr class="contact_tr">
          <td class="contact_td">
            <p class="form_label"><span class="form_label_required">必須</span>氏名</p>
          </td>
          <td class="contact_td">
            <input type="text" class="form_input input_lastname" name="last_name" placeholder="山田">
            <input type="text" class="form_input input_firstname" name="first_name" placeholder="太郎">
            @if($errors->has('last_name'))
              <p class="error-message">{{$errors->first('last_name')}}</p>
            @endif
            @if($errors->has('first_name'))
              <p class="error-message">{{$errors->first('first_name')}}</p>
            @endif
          </td>
      </tr>
      <tr class="contact_tr">
          <td class="contact_td">
            <p class="form_label"><span class="form_label_required">必須</span>E-mail</p>
          </td>
          <td class="contact_td">
            <input type="mail" class="form_input" name="email" placeholder="〇〇@example.com">
            @if($errors->has('email'))
              <p class="error-message">{{$errors->first('email')}}</p>
            @endif
          </td>
      </tr>
      <tr class="contact_tr">
          <td class="contact_td">
            <p class="form_label"><span class="form_label_required">必須</span>お問い合せ件名</p>
          </td>
          <td class="contact_td">
            <select name="title" class="form_input">
              @foreach (config('const.contactlist') as $key => $value)
              <option value="{{ $key }}">{{ $value }}</option>
              @endforeach
            </select>
            @if($errors->has('title'))
              <p class="error-message">{{$errors->first('title')}}</p>
            @endif
          </td>
      </tr>
      <tr class="contact_tr">
        <td class="contact_td">
          <p class="form_label"><span class="form_label_required">必須</span>お問い合せ内容</p>
        </td>
        <td class="contact_td">
          <textarea name="body" class="form_items_textarea"placeholder="こちらにお問い合わせ内容を入力してください。"></textarea>
          @if($errors->has('body'))
          <p class="error-message">{{$errors->first('body')}}</p>
          @endif
        </td>
      </tr>
    </table>
      <div class="contact_btn">
        <button type="submit" name="action" class="btn_submit btn_contact" value="submit">送信</button>
      </div>
  </form>
</div>
  <!-- フッター -->
  <footer>
  <div class="copy">
        <p>&copy; 2021 Sho Momma</p>
      </div>
  </footer>
</body>
</html>