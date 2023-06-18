<?php

class LoanController extends Controller
{
    protected $fileUploadService;

    public function __construct(FileUploadService $fileUploadService)
    {
        $this->fileUploadService = $fileUploadService;
    }

    public function create(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'reason' => 'required|string',
            'employment_status' => 'required|string',
            'documents' => 'required|array',
            'documents.*' => 'file|max:2048', // Adjust the file size limit as needed
        ]);

        // Upload the documents
        $uploadedDocuments = [];
        foreach ($validatedData['documents'] as $document) {
            $uploadedDocuments[] = $this->fileUploadService->upload($document);
        }

        // Create a new loan application record in the database
        $loanApplication = LoanApplication::create([
            'reason' => $validatedData['reason'],
            'employment_status' => $validatedData['employment_status'],
            'documents' => $uploadedDocuments,
        ]);

        // Perform any additional processing or calculations

        // Return a response or redirect to a success page
        return redirect()->route('loan-applications.show', $loanApplication->id)->with('success', 'Loan application submitted successfully.');
    }

    public function show($id)
    {
        // Fetch the loan application record from the database
        $loanApplication = LoanApplication::findOrFail($id);

        // Return the loan application details view
        return view('loan-applications.show', compact('loanApplication'));
    }


?>