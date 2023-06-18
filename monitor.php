namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ElectricityUsage;

class ElectricityController extends Controller
{
    public function viewElectricityUsage(Request $request)
    {
        $user = auth()->user();
        $electricityUsage = ElectricityUsage::where('user_id', $user->id)->get();

        return view('electricity_usage', compact('electricityUsage'));
    }
}
