<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
コンポーネントテスト1
  <x-tests.card title="タイトル1" content="本文" :message="$message" />
  <x-tests.card title="タイトル2" content="本文" :message="$message" />
  <x-tests.card title="タイトル3" content="本文" :message="$message" />
</x-tests.app>
