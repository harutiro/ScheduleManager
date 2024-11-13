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


# コントローラー関係

### コントローラーの作成
```bash
php artisan make:controller ScheduleController
```
