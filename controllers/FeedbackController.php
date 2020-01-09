<?php

class FeedbackController {

    public function home() {

        global $app;
        $feedbacks = $app['database']->selectAll('feedback');

        return view('feedback', ['feedbacks' => $feedbacks]);
    }

    public function about() {

        $company = 'Kuressaare Ametikool';

        return view('about', ['company' => $company]);
    }

    public function store() {
        global $app;

        $app['database']->insert('feedback', [
            'subject' => $_POST['subject'],
            'body' => $_POST['body'],
        ]);

        header('Location: /feedback');
    }

    public function edit() {
        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $feedback = $app['database']->selectById('feedback', $id);

        return view('feedback_edit', ['feedback' => $feedback]);
    }

    public function update() {
        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $feedback = $app['database']->selectById('feedback', $id);

        if (is_object($feedback)) {
            $app['database']->update(
                'feedback',
                [
                    'subject' => $_POST['subject'],
                    'body' => $_POST['body'],
                    'id' => $feedback->id
                ]
            );
        }

        $feedback = $app['database']->selectById('feedback', $id);

        return view('feedback_edit', ['feedback' => $feedback]);
    }

    public function delete() {

        global $app;

        $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

        $feedback = $app['database']->selectById('feedback', $id);

        if (is_object($feedback)) {

            //delete
            $dbResult = $app['database']->deleteById('feedback', $feedback->id);

            if ($dbResult) {
                $result = 'Feedback ' . $feedback->subject . ' deleted!';
            }

        }

        $result = empty($result) ? 'Cannot delete, something went wrong. Please try again!' : $result;

        ?><meta http-equiv="refresh" content="0;URL='/feedback?message=<?php echo $result; ?>'" /><?php

    }

}