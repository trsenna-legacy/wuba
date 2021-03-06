<?php /** @var $model \Scaffold\Model\Foo */ ?>

<?= \Core\View::layout( 'header' ); ?>

    <div class="page-header">
        <h1>Destroy @foo</h1>
    </div>

    <form action="<?= \Core\Helper\Url::to( '@foo/destroy' ); ?>" method="post">

        <input type="hidden" name="id" value="<?= htmlspecialchars( $model->id ); ?>">

        <div class="row">

            <div class="col-md-8">

                <table class="table table-hover table-bordered">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th><?= htmlspecialchars( $model->id ); ?></th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <th>@one</th>
                        <td>@one</td>
                    </tr>
                    <tr>
                        <th>@two</th>
                        <td>@two</td>
                    </tr>
                    <tr>
                        <th>@three</th>
                        <td>@three</td>
                    </tr>
                    </tbody>

                </table>

            </div>

            <div class="col-md-4">

                <div class="panel panel-default">
                    <div class="panel-body">

                        <p>Are you sure about destroying @foo?</p>

                        <div class="pull-left"></div>

                        <div class="pull-right">

                            <input type="submit" class="btn btn-default" name="destroySubmitNo" value="No">
                            <input type="submit" class="btn btn-danger" name="destroySubmitYes" value="Yes">

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </form>

<?= \Core\View::layout( 'footer' ); ?>