const products = [
  { id: 1, name: "ノートPC", sku: "PC-001", quantity: 10 },
  { id: 2, name: "マウス", sku: "MS-001", quantity: 25 },
  { id: 3, name: "キーボード", sku: "KB-001", quantity: 8 },
];

export default function Home() {
  return (
    <main className="min-h-screen bg-gray-100 p-8">
      <div className="mx-auto max-w-5xl">
        <div className="mb-8 flex items-center justify-between">
          <div>
            <h1 className="text-3xl font-bold text-gray-900">
              在庫管理システム
            </h1>
            <p className="mt-2 text-gray-600">商品一覧</p>
          </div>

          <button className="rounded-lg bg-blue-600 px-4 py-2 font-semibold text-white hover:bg-blue-700">
            ＋ 商品を追加
          </button>
        </div>

        <div className="overflow-hidden rounded-xl bg-white shadow">
          <table className="w-full text-left">
            <thead className="bg-gray-50 text-sm text-gray-600">
              <tr>
                <th className="px-6 py-4">商品名</th>
                <th className="px-6 py-4">SKU</th>
                <th className="px-6 py-4">在庫数</th>
              </tr>
            </thead>

            <tbody>
              {products.map((product) => (
                <tr key={product.id} className="border-t border-gray-200">
                  <td className="px-6 py-4 font-medium text-gray-900">
                    {product.name}
                  </td>
                  <td className="px-6 py-4 text-gray-600">{product.sku}</td>
                  <td className="px-6 py-4 text-gray-900">
                    {product.quantity}
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </main>
  );
}