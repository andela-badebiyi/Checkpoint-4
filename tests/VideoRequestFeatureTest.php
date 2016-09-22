<?php
class VideoRequestFeatureTest extends TestCase
{
  /**
  * A basic test example.
  *
  * @return void
  */
  public function testMakeRequestIndexPage()
  {
    $this->visit('/request')
    ->see('Make A request');
  }

  public function testRequestWithNoData()
  {
    $this->visit('/request')
    ->press('submit')
    ->see('The description field is required');
  }

  public function testVideoRequestWithIncompleteData()
  {
    $this->visit('/request')
    ->type('Bodunde Adebiyi', 'requester_name')
    ->type('bodunadebiyi@gmail.com', 'requester_email')
    ->press('submit')
    ->see('The description field is required');
  }

  public function testVideoRequestWithCompleteData()
  {
    $this->visit('/request')
    ->type('Bodunde Adebiyi', 'requester_name')
    ->type('bodunadebiyi@gmail.com', 'requester_email')
    ->type('I need a laravel video', 'description')
    ->press('submit')
    ->see('Your request has been posted');

    $this->seeInDatabase('videorequests', [
      'requester_name'  => 'Bodunde Adebiyi',
      'requester_email' => 'bodunadebiyi@gmail.com',
    ]);

    \App\VideoRequest::where('requester_email', 'bodunadebiyi@gmail.com')->delete();
  }

  public function testResolveRequest()
  {
    //create a user
    $user = factory(\App\User::class)->create([
      'name'     => 'John Doe',
      'email'    => 'j_doe@gmail.com',
      'password' => bcrypt('hayakiri'),
      'username' => 'johndoe',
    ]);

    $videorequest = \App\VideoRequest::create([
      'description'     => 'Help with php tutorial',
      'requester_name'  => 'Anonymous',
      'requester_email' => 'johndoe@gmail.com',
      'request_status'  => 0,
    ]);

    $this->actingAs($user)
    ->visit('/dashboard')
    ->click('resolve')
    ->see('Resolve Request')
    ->seePageIs('/request/'.$videorequest->id);

    //clean up database
    \App\VideoRequest::where('requester_name', 'Anonymous')->delete();
    \App\Video::where('title', 'PHP Tutorial')->delete();
    $user->delete();
  }
}
