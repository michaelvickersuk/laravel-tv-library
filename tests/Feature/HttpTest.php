<?php

namespace Tests\Feature;

use App\Models\Show\Season;
use App\Models\Show\Show;
use App\Models\User\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class HttpTest extends TestCase
{
    use DatabaseTransactions;

    /** @var User */
    protected $user;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = factory(User::class)->create();
    }

    public function testHomeControllerRedirectsToLoginIfUserIsGuest()
    {
        $response = $this->get(route('home'));

        $response->assertRedirect();
    }

    public function testLoggedInUserCanViewHomePage()
    {
        $response = $this->actingAs($this->user)
            ->get(route('home'));

        $response->assertSuccessful();
    }

    public function testCanViewShowPage()
    {
        $show = factory(Show::class)->create();

        $response = $this->actingAs($this->user)
            ->get(route('show', $show));

        $response->assertSuccessful()
            ->assertSeeText($show->name);
    }

    public function testCanViewSeasonPage()
    {
        $season = factory(Season::class)->create();

        $response = $this->actingAs($this->user)
            ->get(route('show.season', $season));

        $response->assertSuccessful()
            ->assertSeeText($season->name)
            ->assertSeeText($season->show->name);
    }

    public function testCanViewEpisodePage()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanViewOwnUserProfilePage()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanViewOtherUsersProfilePage()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanViewOtherUsersPublicWatchlist()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCantViewOtherUsersPrivateWatchlist()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanAddShowToWatchlist()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanRemoveShowFromWatchlist()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanMarkEpisodeAsPlayed()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanMarkEpisodeAsNotPlayed()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanSetWatchlistToPrivate()
    {
        $this->markTestIncomplete('needs implementing');
    }

    public function testCanSetWatchlistToPublic()
    {
        $this->markTestIncomplete('needs implementing');
    }
}
