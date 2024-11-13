スケジュール管理アプリ
====


# DB Migration関係

### マイグレーションファイルを作成したい時

最後がファイル名
```bash
php artisan make:migration create_schedules_table
```

### マイグレーションの実行を行う時

```bash
php artisan migrate
```

# モデル関係

### モデルの作成方法

```bash
php artisan make:model Schedule
```

# シード関係

### シードデータを作成
```bash
php artisan make:seeder SchedulesTableSeede
```

### ファクトリーの作成
```bash
php artisan make:factory ScheduleFactory
```

### シードの呼び出し
```bash
php artisan db:seed
```

# コントローラー関係

### コントローラーの作成
```bash
php artisan make:controller ScheduleController
```

# フォーム関係

### フォームの作成
```bash
php artisan make:request ScheduleRequest
```

# 事故った時に使うもの
```bash
composer dump-autoload
php artisan config:clear
```

# QA

### もしMAMPで実験をしているのに、ルーティングがうまくいかず404エラーになったら
以下の記事を読んでApacheの設定を確認しましょう
https://qiita.com/denbnddb/items/46fc6a8477abf7b405fc

