@extends('layouts.navi')

@section('content')
    <main id="main-area">
    <h2 class="inline-block_test">Moikuについて</h2>
    
    
    
    <!-- DOCUMENTATION -->
    <div class="content">
        
        <h3 class="headline-info">〜直接、参加者を集める〜</h3>
        <p class="text">教え隊は募集記事を直接投稿し参加者を集めることが可能です。</p>
        
        <h3 class="headline">①教え隊が募集記事を新規投稿</h3>
        <h3 class="headline">②学び隊が授業に参加</h3>
        <h3 class="headline">③最低募集人数に達したら授業開催が決定</h3>
        
        <br><br>
        
        <h3 class="headline-info">〜マッチング後、参加者を集める〜</h3>
        <p class="text">学び隊はリクエスト記事を投稿することができます。学び隊はそこから募集記事を投稿すると、参加人数を１人確保できます。</p>
        
        <h3 class="headline">①学び隊がリクエスト記事を新規投稿する</h3>
        <h3 class="headline">②教え隊がリクエスト記事にコメント(立候補)する</h3>
        <h3 class="headline">③学び隊がBESTコメントを決める</h3>
        <h3 class="headline">④BESTコメントに選ばれた学び隊が新規投稿する</h3>
        <h3 class="headline">⑤教え隊が募集記事を新規投稿</h3>
        
        
        <br><br>
        
        <h3 class="headline-info">〜目安箱〜</h3>
        <p class="text">学び隊と教え隊がそれぞれの要望を提案できる環境をこのサイトで整えていきます。<br>
        より良い授業を実現していくためにご意見やご要望がありましたらこちらにお願い致します。</p>
        
        <br><br><br><br>
        
        
        
        
        
        <h3 class="headline-info">〜以下採用担当の方へ〜</h3>
        <p class="text">お忙しい中、当サイトを閲覧していただきありがとうございます。以下に制作物についてまとめましたので、お時間のある時にご覧下さい。</p>
        
        <br><br>
        
        <img src="/images/logo.png" alt="logo" title="Moiku" height="120" />
        <br>
        
        
        <h3 class="headline">アプリの概要</h3>
        <p class="text">集団授業の開催を募集し、参加者を募る。クラウドファンディング型のマッチングサービスである。
        具体的には、生徒側は「場所・授業料」を提案し、先生側は「最低参加人数」を提案する。2者間でマッチングするとプロジェクトと認定され、参加者を募集できる。
        参加者が「最低参加人数」を越えると授業が成立し、集団授業が開催される。</p>
        
        
        <h3 class="headline">主な機能</h3>
        <p class="text">マルチログイン・記事投稿・コメント投稿・いいね機能・授業に参加ボタン・授業管理システム・授業評価投稿・プロフィール機能　など</p>
        
        <h3 class="headline">開発環境</h3>
        <p class="text"><b>[OS]</b> AWSで Amazon Linux2 を使用 <br> <b>[言語]</b> PHP 8.0.25 , HTML , CSS , Java Script <br> <b>[DB]</b> MariaDB <br> <b>[フレームワーク]</b> Laravel 9.37.0 <br> <b>[ライブラリ]</b> jQuery</p>
        
        <h3 class="headline">工夫した点</h3>
        <p class="text"><b>[バックエンド]</b> マルチログイン機能を実装したため、コードの記述量が増えたがBladeファイルやクラスの継承などを利用し、コードが重複しないよう意識した。また、ログインしていない状態でも掲示板が閲覧できるようにし、初めて閲覧した人でも興味が持てる構成にした。<br>
        
        <b>[フロントエンド]</b> トップページにスライドショーを実装し、利用者が実際に授業をするイメージが湧きやすいようにした。また、機能が多くなりそうだったので直感的に操作が分かるUIを心掛けた。</p>
        
        
        <h3 class="headline">制作背景</h3>
        <p class="text">家庭教師と塾講師をしていた経験から、より手軽に興味を持った専門分野（スポーツや芸術、料理なども含む）を学習できるサービスを作りたいと思った。
        
        理想は、生徒側も講師側も、好きなことを集中的に、納得のいく金額で、学べる・教えられることである。
        しかしそれは、高い月謝を支払わなければいけない「家庭教師」ではだめだし、予めカリキュラムの決まっている「集団塾」でも実現できない。
        
        そこで、そんな生徒側と先生側の理想を実現するためのマッチングサービスをここに提案する。</p>
        
        <h3 class="headline">テストアカウント</h3>
        <p class="text">学び隊 ： student@test.com &nbsp;<!--半角スペース1個分-->　　教え隊 : teacher@test.com &nbsp;<!--半角スペース1個分-->　　パスワード : hogehoge &nbsp;<!--半角スペース1個分--> (サイトのログイン画面にも記載)</p>
    </div>
    <br></br>

    </main>
@endsection
