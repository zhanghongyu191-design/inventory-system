async function getProducts() {
  const res = await fetch("http://app:8000/api/products");

  return res.json();
}


export default async function ProductsPage() {

  const products = await getProducts();

  return (
    <main className="min-h-screen bg-gray-100 p-8">

      <div className="mx-auto max-w-5xl">

        <h1 className="mb-8 text-3xl font-bold">
          商品一覧
        </h1>


        <div className="overflow-hidden rounded-xl bg-white shadow">

          <table className="w-full text-left">

            <thead className="bg-gray-50">
              <tr>
                <th className="px-6 py-4">
                  商品コード
                </th>

                <th className="px-6 py-4">
                  日本語名
                </th>

                <th className="px-6 py-4">
                  中文名
                </th>

                <th className="px-6 py-4">
                  在庫数
                </th>

              </tr>
            </thead>


            <tbody>

              {products.map((product:any)=>(
                <tr key={product.id} className="border-t">

                  <td className="px-6 py-4">
                    {product.product_code}
                  </td>

                  <td className="px-6 py-4">
                    {product.name_jp}
                  </td>

                  <td className="px-6 py-4">
                    {product.name_cn}
                  </td>

                  <td className="px-6 py-4">
                    {product.stock_quantity}
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