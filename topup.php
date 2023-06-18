namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElectricityController extends Controller
{
    public function topUp(Request $request)
    {
        $user = auth()->user();

        // Check if the user's current unit balance is below the minimum units balance
        if ($user->unit_balance < $user->min_units_balance) {
            // Perform the top-up logic here
            // For example, you can add the necessary code to initiate the top-up process with a payment gateway or external service

            // After successful top-up, update the user's unit balance
            $user->unit_balance += $request->input('top_up_amount');
            $user->save();

            return redirect()->back()->with('success', 'Electricity top-up successful.');
        }

        return redirect()->back()->with('error', 'No top-up needed.');
    }
}
