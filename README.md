# 🎓 Filament 生徒管理システム

[![Laravel](https://img.shields.io/badge/Laravel-12.2.0-FF2D20?style=for-the-badge&logo=laravel)](https://laravel.com)
[![Filament](https://img.shields.io/badge/Filament-3.3.34-FFAA00?style=for-the-badge&logo=filament)](https://filamentphp.com)
[![PHP](https://img.shields.io/badge/PHP-8.4.11-777BB4?style=for-the-badge&logo=php)](https://php.net)

Laravel + Filament を使用して構築された生徒管理システムのデモプロジェクトです。日本語対応の管理画面で生徒情報の管理が可能です。

## 📋 プロジェクト概要

このプロジェクトは **Filament Admin Panel** の機能を学習・テストするために作成されました。
シンプルな生徒管理機能を通して、Filament の主要機能である一覧表示、詳細表示、編集、作成機能を実装しています。

### 🎯 主な機能

- 📊 **生徒一覧表示** - ID、名前、説明を含む検索可能なテーブル
- 👤 **生徒詳細表示** - 個別の生徒情報の閲覧
- ✏️ **生徒情報編集** - 既存の生徒情報の更新
- ➕ **新規生徒追加** - 新しい生徒の登録
- 🇯🇵 **日本語対応** - UIとナビゲーションの完全日本語化
- 🔍 **検索機能** - 生徒名での検索

## 🛠️ 技術スタック

| 技術 | バージョン | 用途 |
|------|------------|------|
| **PHP** | 8.4.11 | サーバーサイド言語 |
| **Laravel** | 12.2.0 | PHPウェブフレームワーク |
| **Filament** | 3.3.34 | 管理画面構築パッケージ |
| **SQLite** | - | 開発用データベース |
| **Tailwind CSS** | - | CSSフレームワーク（Filament内蔵） |
| **Alpine.js** | - | JavaScriptフレームワーク（Filament内蔵） |

## 🚀 セットアップ方法

### 前提条件

- PHP 8.1以上（SQLite拡張モジュール有効）
- Composer
- Node.js & npm

### インストール手順

1. **リポジトリクローン**
   ```bash
   git clone https://github.com/takeyoshi-mi/filament_test_x.git
   cd filament_test_x
   ```

2. **依存関係インストール**
   ```bash
   composer install
   npm install
   ```

3. **環境設定**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **データベースセットアップ**
   ```bash
   php artisan migrate
   php artisan db:seed --class=AdminUserSeeder
   php artisan db:seed --class=StudentSeeder
   ```

5. **開発サーバー起動**
   ```bash
   php artisan serve
   ```

6. **アクセス**
   - メインサイト: http://127.0.0.1:8000
   - 管理画面: http://127.0.0.1:8000/admin

### ログイン情報

```
Email: admin@admin.com
Password: password
```

## 📚 ダミーデータ

システムには以下の8名の生徒データが含まれています：

| ID | 名前 | 専門・特技 |
|----|------|------------|
| 1 | 田中太郎 | 数学、サッカー部 |
| 2 | 佐藤花子 | 英語・文学、図書委員長 |
| 3 | 山田次郎 | 理科実験、科学部 |
| 4 | 鈴木美咲 | 芸術、美術部長 |
| 5 | 高橋健一 | スポーツ、生徒会副会長 |
| 6 | 渡辺あゆみ | 音楽、吹奏楽部 |
| 7 | 小林大輔 | プログラミング |
| 8 | 加藤明美 | 歴史研究 |

## 🗂️ プロジェクト構造

### 主要ファイル

```
app/
├── Filament/Resources/
│   └── StudentResource.php           # 生徒リソース定義
├── Models/
│   └── Student.php                   # 生徒モデル
database/
├── migrations/
│   └── *_create_students_table.php   # 生徒テーブル定義
└── seeders/
    ├── AdminUserSeeder.php           # 管理者ユーザー作成
    └── StudentSeeder.php             # 生徒ダミーデータ
```

### データベース構造

**Students テーブル**
| カラム | 型 | 説明 |
|--------|----|----|
| id | bigint | 主キー |
| name | string | 生徒名 |
| description | text | 説明・詳細情報 |
| created_at | timestamp | 作成日時 |
| updated_at | timestamp | 更新日時 |

## 🎨 Filament 機能の実装

### リソース設定
- **ナビゲーションラベル**: 「生徒」
- **アイコン**: 🎓 Academic Cap
- **ページ**: 一覧 / 作成 / 表示 / 編集

### テーブル設定
- **検索機能**: 生徒名で検索可能
- **ソート機能**: ID、作成日時でソート
- **アクション**: 表示、編集
- **バルクアクション**: 削除

### フォーム設定
- **名前**: 必須入力フィールド
- **説明**: テキストエリア（任意）

## 🔧 開発メモ

### Git履歴
1. `543fc87` - Initial commit with Laravel and Filament setup
2. `42fe668` - Configure application to work without database
3. `6fa9547` - Add Student resource with Japanese navigation

### 設定変更点
- SQLite データベース使用
- セッション・キャッシュをデータベースベースに変更
- Filament 管理画面の日本語化

## 📖 学習ポイント

このプロジェクトを通して学べること：

- ✅ Laravel プロジェクトのセットアップ
- ✅ Filament の基本的な使い方
- ✅ リソースの作成と設定
- ✅ データベースマイグレーションとシーダー
- ✅ 日本語ローカライゼーション
- ✅ CRUD操作の実装

## 🤝 貢献

このプロジェクトは学習目的で作成されました。改善提案やバグ報告は Issue または Pull Request でお願いします。

## 📄 ライセンス

このプロジェクトは [MIT License](https://opensource.org/licenses/MIT) の下で公開されています。

---

## 🔗 関連リンク

- [Laravel Documentation](https://laravel.com/docs)
- [Filament Documentation](https://filamentphp.com/docs)
- [Tailwind CSS](https://tailwindcss.com)
- [Alpine.js](https://alpinejs.dev)

---

<p align="center">
  Made with ❤️ using Laravel & Filament
</p>