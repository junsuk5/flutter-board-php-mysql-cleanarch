import 'package:http/http.dart' as http;

class BoardApi {
  final http.Client _client;

  BoardApi({http.Client? client}) : _client = (client ?? http.Client());
  static const baseUrl = 'http://10.0.2.2:9001';

  Future<http.Response> getAllList() async {
    final response = await _client.get(Uri.parse('$baseUrl/query.php'));
    return response;
  }

  Future<http.Response> insert(String content) async {
    final response =
        await _client.get(Uri.parse('$baseUrl/insert.php?content=$content'));
    return response;
  }

  Future<http.Response> update(int id, String content) async {
    final response = await _client
        .get(Uri.parse('$baseUrl/update.php?id=$id&content=$content'));
    return response;
  }

  Future<http.Response> delete(int id) async {
    final response = await _client.get(Uri.parse('$baseUrl/delete.php?id=$id'));
    return response;
  }
}
