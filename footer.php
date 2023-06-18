namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PragmaRX\Google2FAQRCode\Google2FA;

class TwoFactorAuthController extends Controller
{
    public function enableTwoFactorAuth()
    {
        $user = Auth::user();

        // Generate a new secret key for the user
        $google2fa = new Google2FA();
        $secretKey = $google2fa->generateSecretKey();

        // Save the secret key to the user's record in the database
        $user->google2fa_secret = $secretKey;
        $user->save();

        // Generate a QR code URL for the user to scan
        $qrCodeUrl = $google2fa->getQRCodeInline(
            config('app.name'),
            $user->email,
            $secretKey
        );

        return view('enable_2fa', compact('qrCodeUrl', 'secretKey'));
    }

    public function verifyTwoFactorAuth(Request $request)
    {
        $request->validate([
            'code' => 'required',
        ]);

        $user = Auth::user();
        $google2fa = new Google2FA();

        // Verify the user's 2FA code
        $valid = $google2fa->verifyKey($user->google2fa_secret, $request->input('code'));

        if ($valid) {
            // Enable 2FA for the user
            $user->google2fa_enabled = true;
            $user->save();

            return redirect()->route('home')->with('success', 'Two-factor authentication enabled successfully.');
        } else {
            return redirect()->back()->with('error', 'Invalid verification code. Please try again.');
        }
    }
}
