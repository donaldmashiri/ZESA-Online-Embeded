namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ElectricityController extends Controller
{
    public function transferUnits(Request $request)
    {
        $request->validate([
            'sender_email' => 'required|email',
            'receiver_email' => 'required|email',
            'units' => 'required|numeric|min:0',
        ]);

        $sender = User::where('email', $request->input('sender_email'))->first();
        $receiver = User::where('email', $request->input('receiver_email'))->first();

        // Check if both sender and receiver exist
        if ($sender && $receiver) {
            // Check if the sender has enough units to transfer
            if ($sender->unit_balance >= $request->input('units')) {
                // Perform the unit transfer
                $sender->unit_balance -= $request->input('units');
                $receiver->unit_balance += $request->input('units');
                $sender->save();
                $receiver->save();

                return redirect()->back()->with('success', 'Units transferred successfully.');
            } else {
                return redirect()->back()->with('error', 'Insufficient units to transfer.');
            }
        }

        return redirect()->back()->with('error', 'Sender or receiver account not found.');
    }
}
