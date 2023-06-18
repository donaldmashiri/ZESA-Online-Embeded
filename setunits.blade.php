namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function updateMinUnitsBalance(Request $request)
    {
        $request->validate([
            'min_units_balance' => 'required|integer|min:0',
        ]);

        $user = auth()->user();
        $user->min_units_balance = $request->input('min_units_balance');
        $user->save();

        return redirect()->back()->with('success', 'Minimum units balance updated successfully.');
    }
}
